<?php

namespace Wikimedia\IDLeDOM\Tests;

class IDLeDOMTest extends \PHPUnit\Framework\TestCase {
	/**
	 * @var string Prefix used when generating temporary class names.
	 */
	private static $prefix = "IDLETEST";
	/**
	 * @var int Counter used when generating temporary class names.
	 */
	private static $counter = 0;

	/**
	 * Verify that stubs & helpers are complete and can be instantiated.
	 * @covers \Wikimedia\IDLeDOM\Stub\Node
	 * @dataProvider ifaceProvider
	 */
	public function testInterfaces( string $name ) {
		$className = self::makeClassName();
		$expr = self::makeClass( $name, $className ) . "\n" .
			  "return new $className();";
		$threw = false;
		try {
			eval( $expr );
		} catch ( \Throwable $e ) {
			$threw = true;
		}
		$this->assertTrue( !$threw );
	}

	/**
	 * Generate a unique temporary class name.
	 * @return string
	 */
	private static function makeClassName(): string {
		return self::$prefix . ( self::$counter++ );
	}

	/**
	 * Create a class definition for a class named $className which
	 * implements the IDLeDOM interface class $name.
	 * @param string $name
	 * @param string $className
	 * @return string PHP code for a class definition
	 */
	private static function makeClass( string $name, string $className ): string {
		$inter = "\\Wikimedia\\IDLeDOM\\$name";
		$interContents = file_get_contents(
			__DIR__ . "/../src/$name.php"
		);
		$parent = preg_match(
			'@^[\t ]*// Direct parent: ([A-Za-z0-9_]+)$@m',
			$interContents,
			$matches
		) ? $matches[1] : null;
		if ( $parent ) {
			$parentName = self::makeClassName();
			$parentCode = self::makeClass( $parent, $parentName );
			$parentExtends = "extends $parentName ";
		} else {
			$parentCode = '';
			$parentExtends = "";
		}

		$useStubs = "";
		if ( file_exists( __DIR__ . "/../src/Stub/$name.php" ) ) {
			$stubContents = file_get_contents(
				__DIR__ . "/../src/Stub/$name.php"
			);
			preg_match_all(
				'@^[\t ]*// use ' . preg_quote( '\Wikimedia\IDLeDOM\Stub\\' ) . '([A-Za-z0-9_]+);$@m',
				$stubContents,
				$matches,
				PREG_PATTERN_ORDER
			);
			$stubs = array_merge(
				[ $name ],
				$matches[1]
			);
			$useStubs = implode( "\n", array_map( function ( $n ) {
				return "use \\Wikimedia\\IDLeDOM\\Stub\\$n;";
			}, $stubs ) );
		} else {
			$useStubs = "";
		}

		$helpers = [ $name ];
		$helpers = array_filter( $helpers, function ( $n ) {
			return file_exists( __DIR__ . "/../src/Helper/$n.php" );
		} );
		$useHelpers = implode( "\n", array_map( function ( $n ) {
			return "use \\Wikimedia\\IDLeDOM\\Helper\\$n;";
		}, $helpers ) );

		return (
			"$parentCode\n" .
			"class $className $parentExtends implements $inter {\n" .
			"$useStubs\n" .
			"$useHelpers\n" .
			"\tprotected function _unimplemented() : \\Exception {\n" .
			"\t\treturn new \\Exception();\n" .
			"\t}\n" .
			"};"
		);
	}

	/**
	 * List all interfaces.
	 */
	public function ifaceProvider() {
		return self::listFiles( __DIR__ . '/../src/' );
	}

	private static function listFiles( $dirname ) {
		$result = [];
		foreach ( scandir( $dirname ) as $entry ) {
			if ( substr( $entry, 0, 1 ) === "." ) {
				continue;
			}
			if ( substr( $entry, -4 ) !== ".php" ) {
				continue;
			}
			$result[] = [ substr( $entry, 0, -4 ) ];
		}
		return $result;
	}
}
