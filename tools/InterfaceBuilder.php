<?php

namespace Wikimedia\IDLeDOM\Tools;

use Wikimedia\Assert\Assert;

/**
 * This class builds PHP interfaces. These are completely generic, and
 * should be implemented by any DOM implementation compliant with our
 * WebIDL mapping.
 */
class InterfaceBuilder extends Builder {

	/** @inheritDoc */
	protected function emitMemberConstructor( string $topName, string $name, array $m ) {
		/* skip */
	}

	/** @inheritDoc */
	protected function emitMemberAttribute( string $topName, string $name, array $m ) {
		// Getter
		$getter = $this->map( $topName, 'get', $name );
		$docType = $this->gen->typeToPHPDoc( $m['idlType'] );
		$phpType = $this->gen->typeToPHP( $m['idlType'], [ 'setter' => true ] );
		$retType = $this->gen->typeToPHP( $m['idlType'], [ 'returnType' => true ] );
		$this->nl( '/**' );
		$this->nl( " * @return $docType" );
		$this->nl( ' */' );
		$this->nl( "public function $getter()$retType;" );
		if ( $m['readonly'] ?? false ) {
			return;
		}
		$this->nl();
		// Setter
		$docType = $this->gen->typeToPHPDoc( $m['idlType'], [ 'setter' => true ] );
		$setter = $this->map( $topName, 'set', $name );
		$this->nl( '/**' );
		$this->nl( " * @param $docType \$val" );
		$this->nl( ' */' );
		$this->nl( "public function $setter( $phpType \$val ) : void;" );
	}

	/**
	 * A helper method to find the special operations among the members.
	 * @param Generator $gen
	 * @param string $topName
	 * @param array $def WebIDL AST definition
	 * @return array
	 */
	public static function specialOperationHelper( Generator $gen, string $topName, array $def ) {
		$specials = [];
		if ( $def['inheritance'] ?? null ) {
			$parentName = $def['inheritance'];
			$parentDef = $gen->def( $parentName );
			Assert::invariant( $parentDef !== null, "Can't find $parentName" );
			$specials = self::specialOperationHelper(
				$gen, $parentName, $parentDef
			);
		}
		foreach ( $def['members'] as $m ) {
			$special = $m['special'] ?? '';
			if ( Generator::extAttrsContain( $m, 'PHPCountable' ) ) {
				$special = "countable";
			}
			if ( $special === '' ) {
				continue; // only interested in specials
			}
			if ( ( $m['name'] ?? '' ) === '' ) {
				continue; // skip unnamed specials (for now)
			}
			$extra = [
				'topName' => $topName, // may be inherited
				'ast' => $m,
			];
			if ( $m['type'] === 'attribute' ) {
				Assert::invariant(
					$special === 'stringifier' || $special === "countable",
					'only stringifier or countable supported'
				);
				$name = $m['name'];
				$typeOpts = [
					'returnType' => true,
					'topName' => $topName,
				];
				$info = [
					'funcName' => $gen->map( $topName, 'get', $name ),
					'phpArgs' => '',
					'invokeArgs' => '',
					'castArgs' => '',
					'paramDocs' => [],
					'retType' => $gen->typeToPHP( $m['idlType'], $typeOpts ),
					'retTypeDoc' => $gen->typeToPHPDoc( $m['idlType'], $typeOpts ),
					'return' => 'return ',
					'special' => $special,
				];
				$specials[$info['special']] = $extra + $info;
			}
			if ( $m['type'] === 'operation' ) {
				$info = self::memberOperationHelper(
					$gen, $topName, $m['name'], $m
				);
				$specials[$info['special']] = $extra + $info;
			}
		}
		return $specials;
	}

	/**
	 * A helper method to compute argument types and properties for a
	 * WebIDL operation.
	 * @param Generator $gen
	 * @param string $topName
	 * @param string $name
	 * @param array $m The WebIDL AST for the operation
	 * @return array
	 */
	public static function memberOperationHelper( Generator $gen, string $topName, string $name, array $m ): array {
		$typeOpts = [ 'topName' => $topName ];
		$funcName = $gen->map( $topName, 'op', $name );
		$retTypeDoc = $gen->typeToPHPDoc( $m['idlType'], [ 'returnType' => true ] + $typeOpts );
		$retType = $gen->typeToPHP( $m['idlType'], [ 'returnType' => true ] + $typeOpts );
		$paramDocs = [];
		$phpArgs = [];
		$invokeArgs = [];
		$castArgs = [];
		$i = 0;
		foreach ( $m['arguments'] as $a ) {
			$v = ( $a['variadic'] ?? false ) ? '...' : '';
			$ty = $a['idlType'];
			$declareDefault = '';
			$invokeDefault = '';
			$legacyNullToEmptyString =
				Generator::extAttrsContain( $a, 'LegacyNullToEmptyString' );
			if ( $legacyNullToEmptyString ) {
				// Broaden the type to allow null and make the default the
				// empty string.
				$ty['nullable'] = true;
				$declareDefault = " = ''";
				$invokeDefault = " ?? ''";
			} elseif ( $a['optional'] ?? false ) {
				// If a value is optional but has no default, then broaden the
				// type to allow null and make the default null.
				// Similarly for dictionary types, use null as the default.
				if ( ( $a['default'] ?? null ) === null ||
					( $a['default']['type'] ?? null ) === 'dictionary' ) {
					$ty['nullable'] = true;
					$declareDefault = ' = null';
					$invokeDefault = ' ?? null';
				} else {
					$val = $gen->valueToPHP( $a['default'] );
					$declareDefault = " = $val";
					$invokeDefault = " ?? $val";
				}
			}
			$paramDocs[] = $gen->typeToPHPDoc( $ty, $typeOpts ) .
						" $v\$" . $a['name'];
			$phpArgs[] = $gen->typeToPHP( $ty, $typeOpts ) .
					  " $v\$" . $a['name'] . $declareDefault;
			$invokeArgs[] = "\$args[$i]$invokeDefault";
			$castArgs[] = $v . '$' . $a['name'];
			$i++;
		}
		$phpArgs = count( $phpArgs ) ? ( ' ' . implode( ', ', $phpArgs ) . ' ' ) : '';
		$invokeArgs = count( $invokeArgs ) ? ( ' ' . implode( ', ', $invokeArgs ) . ' ' ) : '';
		$castArgs = count( $castArgs ) ? ( ' ' . implode( ', ', $castArgs ) . ' ' ) : '';

		$special = $m['special'] ?? '';
		if ( $special === 'getter' || $special === 'setter' || $special === 'deleter' ) {
			if ( preg_match( '/^ int /', $phpArgs ) ) {
				$special = "indexed $special";
			} else {
				$special = "named $special";
			}
		}
		return [
			'funcName' => $funcName,
			'phpArgs' => $phpArgs,
			'invokeArgs' => $invokeArgs,
			'castArgs' => $castArgs,
			'paramDocs' => $paramDocs,
			'retType' => $retType,
			'retTypeDoc' => $retTypeDoc,
			'return' => ( $retType === ' : void' ) ? '' : 'return ',
			'special' => $special,
		];
	}

	/** @inheritDoc */
	protected function emitMemberOperation( string $topName, string $name, array $m ) {
		// Special operations are added to the interface as ordinary
		// methods.  The "special" behavior is implemented by the
		// helper trait.
		$special = $m['special'] ?? '';
		if ( $special !== '' && ( $m['name'] ?? '' ) === '' ) {
			// If the identifier is missing, then omit the method from
			// the interface; we'll handle this special case in the
			// helper trait.
			return;
		}
		$r = self::memberOperationHelper( $this->gen, $topName, $name, $m );
		$this->nl( '/**' );
		foreach ( $r['paramDocs'] as $a ) {
			$this->nl( " * @param $a" );
		}
		$this->nl( " * @return {$r['retTypeDoc']}" );
		$this->nl( ' */' );
		$this->nl( "public function {$r['funcName']}({$r['phpArgs']}){$r['retType']};" );
	}

	/** @inheritDoc */
	protected function emitMemberConst( string $topName, string $name, array $m ) {
		$constName = $this->map( $topName, 'const', $name );
		$docType = $this->gen->typeToPHPDoc( $m['idlType'] );
		$val = $this->gen->valueToPHP( $m['value'] );
		$this->nl( "/** @var $docType */" );
		$this->nl( "public const $constName = $val;" );
	}

	/** @inheritDoc */
	protected function emitMemberIterable( string $topName, string $name, array $m ) {
		$iteratorName = $this->map( $topName, 'op', '_iterable' );
		$docType = $this->gen->typeToPHPDoc( $m['idlType'][0] );
		$this->nl( '/**' );
		$this->nl( " * @return \\Iterator An Iterator<$docType>" );
		$this->nl( ' */' );
		$this->nl( "public function $iteratorName();" );
	}

	/** @inheritDoc */
	protected function emitInterface( string $topName, array $def ): void {
		$this->firstLine( 'interface', $topName, $def );
		foreach ( $def['members'] as $m ) {
			$this->emitMember( $topName, $m );
		}
		$this->nl( '}' );
	}

	/** @inheritDoc */
	protected function emitDictionary( string $topName, array $def ): void {
		// Only the top-level dictionary needs to extend \ArrayAccess;
		// child classes will pick it up from the parent.
		$extendArray = ( $def['inheritance'] ?? null ) === null;
		$this->firstLine( 'interface', $topName, $def );
		foreach ( $def['members'] as $m ) {
			// Treat as pseudo-attributes
			$this->emitMemberAttribute( $topName, $m['name'], [
				'readonly' => true,
			] + $m );
			$this->nl();
		}
		$this->nl( '}' );
	}

	/** @inheritDoc */
	protected function emitCallbackInterface( string $topName, array $def ): void {
		$this->firstLine( 'interface', $topName, $def );
		foreach ( $def['members'] as $m ) {
			$this->emitMember( $topName, $m );
		}
		// static cast() method and __invoke are in the helper trait
		$this->nl( '}' );
	}

	/** @inheritDoc */
	protected function emitInterfaceMixin( string $topName, array $def ): void {
		$this->emitInterface( $topName, $def );
	}

	/** @inheritDoc */
	protected function emitCallback( string $topName, array $def ): void {
		$this->firstLine( 'interface', $topName, $def );
		$this->emitMemberOperation( $topName, '_invoke', [
			'idlType' => $def['idlType'],
			'arguments' => $def['arguments'],
		] );
		// static cast() method and __invoke are in the helper trait
		$this->nl( '}' );
	}

	/** @inheritDoc */
	protected function emitEnum( string $topName, array $def ): void {
		$this->firstLine( 'interface', $topName, $def );
		// Treat enumerations like interfaces with const members
		$val = 0;
		foreach ( $def['values'] as $m ) {
			$name = $m['value'];
			$name = $this->map( $topName, 'const', $name );
			$this->nl( "public const $name = $val;" );
			$val += 1;
		}
		$this->nl( '}' );
	}

	/**
	 * Helper method: generates a typical class/interface start.
	 * @param string $type Class/interface/etc
	 * @param string $topName The class name
	 * @param array $def WebIDL AST definition
	 */
	protected function firstLine( string $type, string $topName, array $def ): void {
		$this->e->phpPrologue( 'Wikimedia\IDLeDOM' );

		$anchormap = [
			'enum' => 'enumdef',
			'dictionary' => 'dictdef',
			'interface mixin' => 'interface',
			'callback' => 'callbackdef',
			'callback interface' => 'callbackdef',
		];
		$anchortype = $def['type'];
		$anchortype = $anchormap[ $anchortype ] ?? $anchortype;
		$anchor = $anchortype . '-' . strtolower( $topName );
		$this->nl( '/**' );
		$this->nl( " * $topName" );
		$this->nl( ' *' );
		$this->nl( " * @see https://dom.spec.whatwg.org/#$anchor" );
		$this->nl( ' *' );
		// Magic properties
		$attrs = [];
		TraitBuilder::collectAttributes( $this->gen, $topName, [], $attrs );
		if ( count( $attrs ) > 0 ) {
			foreach ( $attrs as $a ) {
				$this->nl( " * @property {$a['getterTypeDoc']} \${$a['name']}" );
			}
		}
		$this->nl( ' * @phan-forbid-undeclared-magic-properties' );
		$this->nl( ' */' );

		$firstLine = "$type $topName";
		$mixins = $this->gen->mixins( $topName );
		$extendArray = false;
		$extendIterator = false;
		$extendCountable = false;
		// Top level dictionaries extend \ArrayAccess
		if (
			$def['type'] === 'dictionary' &&
			( $def['inheritance'] ?? null ) === null
		) {
			$extendArray = true;
		}
		// If there's a getter, it should also extend \ArrayAccess
		// If there's an iterable, it should extend \IteratorAggregate
		// If there's a PHPCountable, it should extend \Countable
		foreach ( $def['members'] ?? [] as $m ) {
			if (
				$m['type'] === 'operation' &&
				( $m['special'] ?? '' ) === 'getter' &&
				// For the moment, we skip unnamed getters
				( $m['name'] ?? '' ) !== ''
			) {
				$extendArray = true;
			}
			if ( $m['type'] === 'iterable' ) {
				$extendIterator = true;
			}
			if ( Generator::extAttrsContain( $m, 'PHPCountable' ) ) {
				$extendCountable = true;
			}
		}
		if ( $extendArray ) {
			$mixins[] = '\ArrayAccess';
		}
		if ( $extendIterator ) {
			$mixins[] = '\IteratorAggregate';
		}
		if ( $extendCountable ) {
			$mixins[] = '\Countable';
		}
		if ( count( $mixins ) ) {
			$firstLine .= " extends " . implode( ', ', $mixins );
		}
		$this->nl( "$firstLine {" );
		// This is a hint to the test program (and end user?) about
		// the single inheritance chain.
		if ( $def['inheritance'] ?? false ) {
			$this->nl( "// Direct parent: " . $def['inheritance'] );
			$this->nl();
		}
	}
}
