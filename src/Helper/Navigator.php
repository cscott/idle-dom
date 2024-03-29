<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait Navigator {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\Navigator $this';
		// @var \Wikimedia\IDLeDOM\Navigator $this
		switch ( $name ) {
			case "cookieEnabled":
				return $this->getCookieEnabled();
			case "appCodeName":
				return $this->getAppCodeName();
			case "appName":
				return $this->getAppName();
			case "appVersion":
				return $this->getAppVersion();
			case "platform":
				return $this->getPlatform();
			case "product":
				return $this->getProduct();
			case "productSub":
				return $this->getProductSub();
			case "userAgent":
				return $this->getUserAgent();
			case "vendor":
				return $this->getVendor();
			case "vendorSub":
				return $this->getVendorSub();
			case "oscpu":
				return $this->getOscpu();
			case "language":
				return $this->getLanguage();
			case "onLine":
				return $this->getOnLine();
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
		'@phan-var \Wikimedia\IDLeDOM\Navigator $this';
		// @var \Wikimedia\IDLeDOM\Navigator $this
		switch ( $name ) {
			case "cookieEnabled":
				return true;
			case "appCodeName":
				return true;
			case "appName":
				return true;
			case "appVersion":
				return true;
			case "platform":
				return true;
			case "product":
				return true;
			case "productSub":
				return true;
			case "userAgent":
				return true;
			case "vendor":
				return true;
			case "vendorSub":
				return true;
			case "oscpu":
				return true;
			case "language":
				return true;
			case "onLine":
				return true;
			default:
				break;
		}
		return false;
	}

}
