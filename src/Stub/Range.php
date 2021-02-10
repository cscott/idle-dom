<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\DocumentFragment;
use Wikimedia\IDLeDOM\Node;

trait Range {
	use \Wikimedia\IDLeDOM\Stub\AbstractRange;

	/**
	 * @return \Exception
	 */
	abstract public function unimplemented() : \Exception;

	/**
	 * @return Node
	 */
	public function getCommonAncestorContainer() : Node {
		throw self::unimplemented();
	}

	/**
	 * @param Node $node
	 * @param int $offset
	 * @return void
	 */
	public function setStart( Node $node, int $offset ) : void {
		throw self::unimplemented();
	}

	/**
	 * @param Node $node
	 * @param int $offset
	 * @return void
	 */
	public function setEnd( Node $node, int $offset ) : void {
		throw self::unimplemented();
	}

	/**
	 * @param Node $node
	 * @return void
	 */
	public function setStartBefore( Node $node ) : void {
		throw self::unimplemented();
	}

	/**
	 * @param Node $node
	 * @return void
	 */
	public function setStartAfter( Node $node ) : void {
		throw self::unimplemented();
	}

	/**
	 * @param Node $node
	 * @return void
	 */
	public function setEndBefore( Node $node ) : void {
		throw self::unimplemented();
	}

	/**
	 * @param Node $node
	 * @return void
	 */
	public function setEndAfter( Node $node ) : void {
		throw self::unimplemented();
	}

	/**
	 * @param bool $toStart
	 * @return void
	 */
	public function collapse( bool $toStart = false ) : void {
		throw self::unimplemented();
	}

	/**
	 * @param Node $node
	 * @return void
	 */
	public function selectNode( Node $node ) : void {
		throw self::unimplemented();
	}

	/**
	 * @param Node $node
	 * @return void
	 */
	public function selectNodeContents( Node $node ) : void {
		throw self::unimplemented();
	}

	/**
	 * @param int $how
	 * @param \Wikimedia\IDLeDOM\Range $sourceRange
	 * @return int
	 */
	public function compareBoundaryPoints( int $how, \Wikimedia\IDLeDOM\Range $sourceRange ) : int {
		throw self::unimplemented();
	}

	/**
	 * @return void
	 */
	public function deleteContents() : void {
		throw self::unimplemented();
	}

	/**
	 * @return DocumentFragment
	 */
	public function extractContents() : DocumentFragment {
		throw self::unimplemented();
	}

	/**
	 * @return DocumentFragment
	 */
	public function cloneContents() : DocumentFragment {
		throw self::unimplemented();
	}

	/**
	 * @param Node $node
	 * @return void
	 */
	public function insertNode( Node $node ) : void {
		throw self::unimplemented();
	}

	/**
	 * @param Node $newParent
	 * @return void
	 */
	public function surroundContents( Node $newParent ) : void {
		throw self::unimplemented();
	}

	/**
	 * @return \Wikimedia\IDLeDOM\Range
	 */
	public function cloneRange() : \Wikimedia\IDLeDOM\Range {
		throw self::unimplemented();
	}

	/**
	 * @return void
	 */
	public function detach() : void {
		throw self::unimplemented();
	}

	/**
	 * @param Node $node
	 * @param int $offset
	 * @return bool
	 */
	public function isPointInRange( Node $node, int $offset ) : bool {
		throw self::unimplemented();
	}

	/**
	 * @param Node $node
	 * @param int $offset
	 * @return int
	 */
	public function comparePoint( Node $node, int $offset ) : int {
		throw self::unimplemented();
	}

	/**
	 * @param Node $node
	 * @return bool
	 */
	public function intersectsNode( Node $node ) : bool {
		throw self::unimplemented();
	}

}