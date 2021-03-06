<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\AssignedNodesOptions;
use Wikimedia\IDLeDOM\Element;
use Wikimedia\IDLeDOM\Node;

trait HTMLSlotElement {
	// use \Wikimedia\IDLeDOM\Stub\HTMLElement;
	// use \Wikimedia\IDLeDOM\Stub\Element;
	// use \Wikimedia\IDLeDOM\Stub\Node;
	// use \Wikimedia\IDLeDOM\Stub\EventTarget;
	// use \Wikimedia\IDLeDOM\Stub\ChildNode;
	// use \Wikimedia\IDLeDOM\Stub\NonDocumentTypeChildNode;
	// use \Wikimedia\IDLeDOM\Stub\ParentNode;
	// use \Wikimedia\IDLeDOM\Stub\Slottable;

	// Underscore is used to avoid conflicts with DOM-reserved names
	// phpcs:disable PSR2.Methods.MethodDeclaration.Underscore
	// phpcs:disable MediaWiki.NamingConventions.LowerCamelFunctionsName.FunctionName

	/**
	 * @return \Exception
	 */
	abstract protected function _unimplemented() : \Exception;

	// phpcs:enable

	/**
	 * @return string
	 */
	public function getName() : string {
		throw self::_unimplemented();
	}

	/**
	 * @param string $val
	 */
	public function setName( string $val ) : void {
		throw self::_unimplemented();
	}

	/**
	 * @param AssignedNodesOptions|associative-array|null $options
	 * @return list<Node>
	 */
	public function assignedNodes( /* ?mixed */ $options = null ) : array {
		throw self::_unimplemented();
	}

	/**
	 * @param AssignedNodesOptions|associative-array|null $options
	 * @return list<Element>
	 */
	public function assignedElements( /* ?mixed */ $options = null ) : array {
		throw self::_unimplemented();
	}

}
