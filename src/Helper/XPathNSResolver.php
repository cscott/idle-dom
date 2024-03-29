<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait XPathNSResolver {
	/**
	 * Make this callback interface callable.
	 * @param mixed ...$args
	 * @return ?string
	 */
	public function __invoke( ...$args ) {
		'@phan-var \Wikimedia\IDLeDOM\XPathNSResolver $this';
		// @var \Wikimedia\IDLeDOM\XPathNSResolver $this
		return $this->lookupNamespaceURI( $args[0] );
	}

	/**
	 * Create a XPathNSResolver from a callable.
	 *
	 * @param callable|\Wikimedia\IDLeDOM\XPathNSResolver $f
	 * @return \Wikimedia\IDLeDOM\XPathNSResolver
	 */
	public static function cast( $f ) {
		if ( $f instanceof \Wikimedia\IDLeDOM\XPathNSResolver ) {
			return $f;
		}
		return new class( $f ) implements \Wikimedia\IDLeDOM\XPathNSResolver {
			use XPathNSResolver;

			/** @var callable */
			private $f;

			/**
			 * @param callable $f
			 */
			public function __construct( $f ) {
				$this->f = $f;
			}

			/**
			 * @param ?string $prefix
			 * @return ?string
			 */
			public function lookupNamespaceURI( ?string $prefix ) : ?string {
				$f = $this->f;
				return $f( $prefix );
			}
		};
	}
}
