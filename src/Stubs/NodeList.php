<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stubs;

trait NodeList {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		switch ( $name ) {
			case "length":
				return $this->getLength();
			default:
				break;
		}
		$trace = debug_backtrace();
		trigger_error(
			'Undefined property via __get(): ' . $name .
			' in ' . $trace[0]['file'] .
			' on line ' . $trace[0]['line'],
			E_USER_NOTICE
		);
		return null;
	}

	/**
	 * @return int
	 */
	abstract public function getLength() : int;

}