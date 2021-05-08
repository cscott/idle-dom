<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

use Wikimedia\IDLeDOM\Element;

trait HTMLAreaElement {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\HTMLAreaElement $this';
		// @var \Wikimedia\IDLeDOM\HTMLAreaElement $this
		switch ( $name ) {
			case "nodeType":
				return $this->getNodeType();
			case "nodeName":
				return $this->getNodeName();
			case "baseURI":
				return $this->getBaseURI();
			case "isConnected":
				return $this->getIsConnected();
			case "ownerDocument":
				return $this->getOwnerDocument();
			case "parentNode":
				return $this->getParentNode();
			case "parentElement":
				return $this->getParentElement();
			case "childNodes":
				return $this->getChildNodes();
			case "firstChild":
				return $this->getFirstChild();
			case "lastChild":
				return $this->getLastChild();
			case "previousSibling":
				return $this->getPreviousSibling();
			case "nextSibling":
				return $this->getNextSibling();
			case "nodeValue":
				return $this->getNodeValue();
			case "textContent":
				return $this->getTextContent();
			case "previousElementSibling":
				return $this->getPreviousElementSibling();
			case "nextElementSibling":
				return $this->getNextElementSibling();
			case "children":
				return $this->getChildren();
			case "firstElementChild":
				return $this->getFirstElementChild();
			case "lastElementChild":
				return $this->getLastElementChild();
			case "childElementCount":
				return $this->getChildElementCount();
			case "assignedSlot":
				return $this->getAssignedSlot();
			case "namespaceURI":
				return $this->getNamespaceURI();
			case "prefix":
				return $this->getPrefix();
			case "localName":
				return $this->getLocalName();
			case "tagName":
				return $this->getTagName();
			case "id":
				return $this->getId();
			case "className":
				return $this->getClassName();
			case "classList":
				return $this->getClassList();
			case "slot":
				return $this->getSlot();
			case "attributes":
				return $this->getAttributes();
			case "shadowRoot":
				return $this->getShadowRoot();
			case "dataset":
				return $this->getDataset();
			case "nonce":
				return $this->getNonce();
			case "tabIndex":
				return $this->getTabIndex();
			case "title":
				return $this->getTitle();
			case "lang":
				return $this->getLang();
			case "translate":
				return $this->getTranslate();
			case "dir":
				return $this->getDir();
			case "hidden":
				return $this->getHidden();
			case "accessKey":
				return $this->getAccessKey();
			case "accessKeyLabel":
				return $this->getAccessKeyLabel();
			case "draggable":
				return $this->getDraggable();
			case "spellcheck":
				return $this->getSpellcheck();
			case "autocapitalize":
				return $this->getAutocapitalize();
			case "innerText":
				return $this->getInnerText();
			case "offsetParent":
				return $this->getOffsetParent();
			case "offsetTop":
				return $this->getOffsetTop();
			case "offsetLeft":
				return $this->getOffsetLeft();
			case "offsetWidth":
				return $this->getOffsetWidth();
			case "offsetHeight":
				return $this->getOffsetHeight();
			case "href":
				return $this->getHref();
			case "origin":
				return $this->getOrigin();
			case "protocol":
				return $this->getProtocol();
			case "username":
				return $this->getUsername();
			case "password":
				return $this->getPassword();
			case "host":
				return $this->getHost();
			case "hostname":
				return $this->getHostname();
			case "port":
				return $this->getPort();
			case "pathname":
				return $this->getPathname();
			case "search":
				return $this->getSearch();
			case "hash":
				return $this->getHash();
			case "alt":
				return $this->getAlt();
			case "coords":
				return $this->getCoords();
			case "shape":
				return $this->getShape();
			case "target":
				return $this->getTarget();
			case "rel":
				return $this->getRel();
			case "relList":
				return $this->getRelList();
			case "noHref":
				return $this->getNoHref();
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
		'@phan-var \Wikimedia\IDLeDOM\HTMLAreaElement $this';
		// @var \Wikimedia\IDLeDOM\HTMLAreaElement $this
		switch ( $name ) {
			case "nodeType":
				return true;
			case "nodeName":
				return true;
			case "baseURI":
				return true;
			case "isConnected":
				return true;
			case "ownerDocument":
				return $this->getOwnerDocument() !== null;
			case "parentNode":
				return $this->getParentNode() !== null;
			case "parentElement":
				return $this->getParentElement() !== null;
			case "childNodes":
				return true;
			case "firstChild":
				return $this->getFirstChild() !== null;
			case "lastChild":
				return $this->getLastChild() !== null;
			case "previousSibling":
				return $this->getPreviousSibling() !== null;
			case "nextSibling":
				return $this->getNextSibling() !== null;
			case "nodeValue":
				return $this->getNodeValue() !== null;
			case "textContent":
				return $this->getTextContent() !== null;
			case "previousElementSibling":
				return $this->getPreviousElementSibling() !== null;
			case "nextElementSibling":
				return $this->getNextElementSibling() !== null;
			case "children":
				return true;
			case "firstElementChild":
				return $this->getFirstElementChild() !== null;
			case "lastElementChild":
				return $this->getLastElementChild() !== null;
			case "childElementCount":
				return true;
			case "assignedSlot":
				return $this->getAssignedSlot() !== null;
			case "namespaceURI":
				return $this->getNamespaceURI() !== null;
			case "prefix":
				return $this->getPrefix() !== null;
			case "localName":
				return true;
			case "tagName":
				return true;
			case "id":
				return true;
			case "className":
				return true;
			case "classList":
				return true;
			case "slot":
				return true;
			case "attributes":
				return true;
			case "shadowRoot":
				return $this->getShadowRoot() !== null;
			case "dataset":
				return true;
			case "nonce":
				return true;
			case "tabIndex":
				return true;
			case "title":
				return true;
			case "lang":
				return true;
			case "translate":
				return true;
			case "dir":
				return true;
			case "hidden":
				return true;
			case "accessKey":
				return true;
			case "accessKeyLabel":
				return true;
			case "draggable":
				return true;
			case "spellcheck":
				return true;
			case "autocapitalize":
				return true;
			case "innerText":
				return true;
			case "offsetParent":
				return $this->getOffsetParent() !== null;
			case "offsetTop":
				return true;
			case "offsetLeft":
				return true;
			case "offsetWidth":
				return true;
			case "offsetHeight":
				return true;
			case "href":
				return true;
			case "origin":
				return true;
			case "protocol":
				return true;
			case "username":
				return true;
			case "password":
				return true;
			case "host":
				return true;
			case "hostname":
				return true;
			case "port":
				return true;
			case "pathname":
				return true;
			case "search":
				return true;
			case "hash":
				return true;
			case "alt":
				return true;
			case "coords":
				return true;
			case "shape":
				return true;
			case "target":
				return true;
			case "rel":
				return true;
			case "relList":
				return true;
			case "noHref":
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
		'@phan-var \Wikimedia\IDLeDOM\HTMLAreaElement $this';
		// @var \Wikimedia\IDLeDOM\HTMLAreaElement $this
		switch ( $name ) {
			case "nodeValue":
				$this->setNodeValue( $value );
				return;
			case "textContent":
				$this->setTextContent( $value );
				return;
			case "id":
				$this->setId( $value );
				return;
			case "className":
				$this->setClassName( $value );
				return;
			case "slot":
				$this->setSlot( $value );
				return;
			case "nonce":
				$this->setNonce( $value );
				return;
			case "tabIndex":
				$this->setTabIndex( $value );
				return;
			case "title":
				$this->setTitle( $value );
				return;
			case "lang":
				$this->setLang( $value );
				return;
			case "translate":
				$this->setTranslate( $value );
				return;
			case "dir":
				$this->setDir( $value );
				return;
			case "hidden":
				$this->setHidden( $value );
				return;
			case "accessKey":
				$this->setAccessKey( $value );
				return;
			case "draggable":
				$this->setDraggable( $value );
				return;
			case "spellcheck":
				$this->setSpellcheck( $value );
				return;
			case "autocapitalize":
				$this->setAutocapitalize( $value );
				return;
			case "innerText":
				$this->setInnerText( $value );
				return;
			case "href":
				$this->setHref( $value );
				return;
			case "protocol":
				$this->setProtocol( $value );
				return;
			case "username":
				$this->setUsername( $value );
				return;
			case "password":
				$this->setPassword( $value );
				return;
			case "host":
				$this->setHost( $value );
				return;
			case "hostname":
				$this->setHostname( $value );
				return;
			case "port":
				$this->setPort( $value );
				return;
			case "pathname":
				$this->setPathname( $value );
				return;
			case "search":
				$this->setSearch( $value );
				return;
			case "hash":
				$this->setHash( $value );
				return;
			case "alt":
				$this->setAlt( $value );
				return;
			case "coords":
				$this->setCoords( $value );
				return;
			case "shape":
				$this->setShape( $value );
				return;
			case "target":
				$this->setTarget( $value );
				return;
			case "rel":
				$this->setRel( $value );
				return;
			case "noHref":
				$this->setNoHref( $value );
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
		'@phan-var \Wikimedia\IDLeDOM\HTMLAreaElement $this';
		// @var \Wikimedia\IDLeDOM\HTMLAreaElement $this
		switch ( $name ) {
			case "nodeType":
				break;
			case "nodeName":
				break;
			case "baseURI":
				break;
			case "isConnected":
				break;
			case "ownerDocument":
				break;
			case "parentNode":
				break;
			case "parentElement":
				break;
			case "childNodes":
				break;
			case "firstChild":
				break;
			case "lastChild":
				break;
			case "previousSibling":
				break;
			case "nextSibling":
				break;
			case "nodeValue":
				$this->setNodeValue( null );
				return;
			case "textContent":
				$this->setTextContent( null );
				return;
			case "previousElementSibling":
				break;
			case "nextElementSibling":
				break;
			case "children":
				break;
			case "firstElementChild":
				break;
			case "lastElementChild":
				break;
			case "childElementCount":
				break;
			case "assignedSlot":
				break;
			case "namespaceURI":
				break;
			case "prefix":
				break;
			case "localName":
				break;
			case "tagName":
				break;
			case "id":
				break;
			case "className":
				break;
			case "classList":
				break;
			case "slot":
				break;
			case "attributes":
				break;
			case "shadowRoot":
				break;
			case "dataset":
				break;
			case "nonce":
				break;
			case "tabIndex":
				break;
			case "title":
				break;
			case "lang":
				break;
			case "translate":
				break;
			case "dir":
				break;
			case "hidden":
				break;
			case "accessKey":
				break;
			case "accessKeyLabel":
				break;
			case "draggable":
				break;
			case "spellcheck":
				break;
			case "autocapitalize":
				break;
			case "innerText":
				break;
			case "offsetParent":
				break;
			case "offsetTop":
				break;
			case "offsetLeft":
				break;
			case "offsetWidth":
				break;
			case "offsetHeight":
				break;
			case "href":
				break;
			case "origin":
				break;
			case "protocol":
				break;
			case "username":
				break;
			case "password":
				break;
			case "host":
				break;
			case "hostname":
				break;
			case "port":
				break;
			case "pathname":
				break;
			case "search":
				break;
			case "hash":
				break;
			case "alt":
				break;
			case "coords":
				break;
			case "shape":
				break;
			case "target":
				break;
			case "rel":
				break;
			case "relList":
				break;
			case "noHref":
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

	/**
	 * @return string
	 */
	public function getAlt() : string {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->getAttribute( 'alt' ) ?? '';
	}

	/**
	 * @param string $val
	 */
	public function setAlt( string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'alt', $val );
	}

	/**
	 * @return string
	 */
	public function getCoords() : string {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->getAttribute( 'coords' ) ?? '';
	}

	/**
	 * @param string $val
	 */
	public function setCoords( string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'coords', $val );
	}

	/**
	 * @return string
	 */
	public function getShape() : string {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->getAttribute( 'shape' ) ?? '';
	}

	/**
	 * @param string $val
	 */
	public function setShape( string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'shape', $val );
	}

	/**
	 * @return string
	 */
	public function getTarget() : string {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->getAttribute( 'target' ) ?? '';
	}

	/**
	 * @param string $val
	 */
	public function setTarget( string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'target', $val );
	}

	/**
	 * @return string
	 */
	public function getRel() : string {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->getAttribute( 'rel' ) ?? '';
	}

	/**
	 * @param string $val
	 */
	public function setRel( string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'rel', $val );
	}

	/**
	 * @return bool
	 */
	public function getNoHref() : bool {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->hasAttribute( 'nohref' );
	}

	/**
	 * @param bool $val
	 */
	public function setNoHref( bool $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		if ( $val ) {
			$this->setAttribute( 'nohref', '' );
		} else {
			$this->removeAttribute( 'nohref' );
		}
	}

}
