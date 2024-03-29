<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait TextTrack {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\TextTrack $this';
		// @var \Wikimedia\IDLeDOM\TextTrack $this
		switch ( $name ) {
			case "kind":
				return $this->getKind();
			case "label":
				return $this->getLabel();
			case "language":
				return $this->getLanguage();
			case "id":
				return $this->getId();
			case "inBandMetadataTrackDispatchType":
				return $this->getInBandMetadataTrackDispatchType();
			case "cues":
				return $this->getCues();
			case "activeCues":
				return $this->getActiveCues();
			case "oncuechange":
				return $this->getOncuechange();
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
	 * @param string $name
	 * @return bool
	 */
	public function __isset( string $name ) : bool {
		'@phan-var \Wikimedia\IDLeDOM\TextTrack $this';
		// @var \Wikimedia\IDLeDOM\TextTrack $this
		switch ( $name ) {
			case "kind":
				return true;
			case "label":
				return true;
			case "language":
				return true;
			case "id":
				return true;
			case "inBandMetadataTrackDispatchType":
				return true;
			case "cues":
				return $this->getCues() !== null;
			case "activeCues":
				return $this->getActiveCues() !== null;
			case "oncuechange":
				return true;
			default:
				break;
		}
		return false;
	}

	/**
	 * @param string $name
	 * @param mixed $value
	 */
	public function __set( string $name, $value ) : void {
		'@phan-var \Wikimedia\IDLeDOM\TextTrack $this';
		// @var \Wikimedia\IDLeDOM\TextTrack $this
		switch ( $name ) {
			case "oncuechange":
				$this->setOncuechange( $value );
				return;
			default:
				break;
		}
		$trace = debug_backtrace();
		trigger_error(
			'Undefined property via __set(): ' . $name .
			' in ' . $trace[0]['file'] .
			' on line ' . $trace[0]['line'],
			E_USER_NOTICE
		);
	}

	/**
	 * @param string $name
	 */
	public function __unset( string $name ) : void {
		'@phan-var \Wikimedia\IDLeDOM\TextTrack $this';
		// @var \Wikimedia\IDLeDOM\TextTrack $this
		switch ( $name ) {
			case "kind":
				break;
			case "label":
				break;
			case "language":
				break;
			case "id":
				break;
			case "inBandMetadataTrackDispatchType":
				break;
			case "cues":
				break;
			case "activeCues":
				break;
			case "oncuechange":
				break;
			default:
				return;
		}
		$trace = debug_backtrace();
		trigger_error(
			'Undefined property via __unset(): ' . $name .
			' in ' . $trace[0]['file'] .
			' on line ' . $trace[0]['line'],
			E_USER_NOTICE
		);
	}

}
