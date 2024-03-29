<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

use Wikimedia\IDLeDOM\Element;

trait HTMLImageElement {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\HTMLImageElement $this';
		// @var \Wikimedia\IDLeDOM\HTMLImageElement $this
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
			case "contentEditable":
				return $this->getContentEditable();
			case "enterKeyHint":
				return $this->getEnterKeyHint();
			case "isContentEditable":
				return $this->getIsContentEditable();
			case "inputMode":
				return $this->getInputMode();
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
			case "crossOrigin":
				return $this->getCrossOrigin();
			case "referrerPolicy":
				return $this->getReferrerPolicy();
			case "alt":
				return $this->getAlt();
			case "src":
				return $this->getSrc();
			case "srcset":
				return $this->getSrcset();
			case "sizes":
				return $this->getSizes();
			case "useMap":
				return $this->getUseMap();
			case "isMap":
				return $this->getIsMap();
			case "width":
				return $this->getWidth();
			case "height":
				return $this->getHeight();
			case "naturalWidth":
				return $this->getNaturalWidth();
			case "naturalHeight":
				return $this->getNaturalHeight();
			case "complete":
				return $this->getComplete();
			case "currentSrc":
				return $this->getCurrentSrc();
			case "decoding":
				return $this->getDecoding();
			case "loading":
				return $this->getLoading();
			case "name":
				return $this->getName();
			case "lowsrc":
				return $this->getLowsrc();
			case "align":
				return $this->getAlign();
			case "hspace":
				return $this->getHspace();
			case "vspace":
				return $this->getVspace();
			case "longDesc":
				return $this->getLongDesc();
			case "border":
				return $this->getBorder();
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
		'@phan-var \Wikimedia\IDLeDOM\HTMLImageElement $this';
		// @var \Wikimedia\IDLeDOM\HTMLImageElement $this
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
			case "contentEditable":
				return true;
			case "enterKeyHint":
				return true;
			case "isContentEditable":
				return true;
			case "inputMode":
				return true;
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
			case "crossOrigin":
				return $this->getCrossOrigin() !== null;
			case "referrerPolicy":
				return true;
			case "alt":
				return true;
			case "src":
				return true;
			case "srcset":
				return true;
			case "sizes":
				return true;
			case "useMap":
				return true;
			case "isMap":
				return true;
			case "width":
				return true;
			case "height":
				return true;
			case "naturalWidth":
				return true;
			case "naturalHeight":
				return true;
			case "complete":
				return true;
			case "currentSrc":
				return true;
			case "decoding":
				return true;
			case "loading":
				return true;
			case "name":
				return true;
			case "lowsrc":
				return true;
			case "align":
				return true;
			case "hspace":
				return true;
			case "vspace":
				return true;
			case "longDesc":
				return true;
			case "border":
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
		'@phan-var \Wikimedia\IDLeDOM\HTMLImageElement $this';
		// @var \Wikimedia\IDLeDOM\HTMLImageElement $this
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
			case "contentEditable":
				$this->setContentEditable( $value );
				return;
			case "enterKeyHint":
				$this->setEnterKeyHint( $value );
				return;
			case "inputMode":
				$this->setInputMode( $value );
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
			case "crossOrigin":
				$this->setCrossOrigin( $value );
				return;
			case "referrerPolicy":
				$this->setReferrerPolicy( $value );
				return;
			case "alt":
				$this->setAlt( $value );
				return;
			case "src":
				$this->setSrc( $value );
				return;
			case "srcset":
				$this->setSrcset( $value );
				return;
			case "sizes":
				$this->setSizes( $value );
				return;
			case "useMap":
				$this->setUseMap( $value );
				return;
			case "isMap":
				$this->setIsMap( $value );
				return;
			case "width":
				$this->setWidth( $value );
				return;
			case "height":
				$this->setHeight( $value );
				return;
			case "decoding":
				$this->setDecoding( $value );
				return;
			case "loading":
				$this->setLoading( $value );
				return;
			case "name":
				$this->setName( $value );
				return;
			case "lowsrc":
				$this->setLowsrc( $value );
				return;
			case "align":
				$this->setAlign( $value );
				return;
			case "hspace":
				$this->setHspace( $value );
				return;
			case "vspace":
				$this->setVspace( $value );
				return;
			case "longDesc":
				$this->setLongDesc( $value );
				return;
			case "border":
				$this->setBorder( $value );
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
		'@phan-var \Wikimedia\IDLeDOM\HTMLImageElement $this';
		// @var \Wikimedia\IDLeDOM\HTMLImageElement $this
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
			case "contentEditable":
				break;
			case "enterKeyHint":
				break;
			case "isContentEditable":
				break;
			case "inputMode":
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
			case "crossOrigin":
				$this->setCrossOrigin( null );
				return;
			case "referrerPolicy":
				break;
			case "alt":
				break;
			case "src":
				break;
			case "srcset":
				break;
			case "sizes":
				break;
			case "useMap":
				break;
			case "isMap":
				break;
			case "width":
				break;
			case "height":
				break;
			case "naturalWidth":
				break;
			case "naturalHeight":
				break;
			case "complete":
				break;
			case "currentSrc":
				break;
			case "decoding":
				break;
			case "loading":
				break;
			case "name":
				break;
			case "lowsrc":
				break;
			case "align":
				break;
			case "hspace":
				break;
			case "vspace":
				break;
			case "longDesc":
				break;
			case "border":
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
	 * @return ?string
	 */
	public function getCrossOrigin() : ?string {
		'@phan-var Element $this'; /** @var Element $this */
		$val = $this->getAttribute( 'crossorigin' );
		if ( $val !== null ) {
			$val = strtr( $val, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'abcdefghijklmnopqrstuvwxyz' );
			switch ( $val ) {
				case 'anonymous':
				case 'use-credentials':
					return $val;
				default:
					return 'anonymous';
			}
		}
		return null;
	}

	/**
	 * @param ?string $val
	 */
	public function setCrossOrigin( ?string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		if ( $val !== null ) {
			$this->setAttribute( 'crossorigin', $val );
		} else {
			$this->removeAttribute( 'crossorigin' );
		}
	}

	/**
	 * @return string
	 */
	public function getReferrerPolicy() : string {
		'@phan-var Element $this'; /** @var Element $this */
		$val = $this->getAttribute( 'referrerpolicy' );
		if ( $val !== null ) {
			$val = strtr( $val, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'abcdefghijklmnopqrstuvwxyz' );
			switch ( $val ) {
				case '':
				case 'no-referrer':
				case 'no-referrer-when-downgrade':
				case 'same-origin':
				case 'origin':
				case 'strict-origin':
				case 'origin-when-cross-origin':
				case 'strict-origin-when-cross-origin':
				case 'unsafe-url':
					return $val;
				default:
					return '';
			}
		}
		return '';
	}

	/**
	 * @param string $val
	 */
	public function setReferrerPolicy( string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'referrerpolicy', $val );
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
	public function getSizes() : string {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->getAttribute( 'sizes' ) ?? '';
	}

	/**
	 * @param string $val
	 */
	public function setSizes( string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'sizes', $val );
	}

	/**
	 * @return string
	 */
	public function getUseMap() : string {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->getAttribute( 'usemap' ) ?? '';
	}

	/**
	 * @param string $val
	 */
	public function setUseMap( string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'usemap', $val );
	}

	/**
	 * @return bool
	 */
	public function getIsMap() : bool {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->hasAttribute( 'ismap' );
	}

	/**
	 * @param bool $val
	 */
	public function setIsMap( bool $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		if ( $val ) {
			$this->setAttribute( 'ismap', '' );
		} else {
			$this->removeAttribute( 'ismap' );
		}
	}

	/**
	 * @return string
	 */
	public function getDecoding() : string {
		'@phan-var Element $this'; /** @var Element $this */
		$val = $this->getAttribute( 'decoding' );
		if ( $val !== null ) {
			$val = strtr( $val, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'abcdefghijklmnopqrstuvwxyz' );
			switch ( $val ) {
				case 'auto':
				case 'sync':
				case 'async':
					return $val;
				default:
					return 'auto';
			}
		}
		return 'auto';
	}

	/**
	 * @param string $val
	 */
	public function setDecoding( string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'decoding', $val );
	}

	/**
	 * @return string
	 */
	public function getLoading() : string {
		'@phan-var Element $this'; /** @var Element $this */
		$val = $this->getAttribute( 'loading' );
		if ( $val !== null ) {
			$val = strtr( $val, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'abcdefghijklmnopqrstuvwxyz' );
			switch ( $val ) {
				case 'eager':
				case 'lazy':
					return $val;
				default:
					return 'eager';
			}
		}
		return 'eager';
	}

	/**
	 * @param string $val
	 */
	public function setLoading( string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'loading', $val );
	}

	/**
	 * @return string
	 */
	public function getName() : string {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->getAttribute( 'name' ) ?? '';
	}

	/**
	 * @param string $val
	 */
	public function setName( string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'name', $val );
	}

	/**
	 * @return string
	 */
	public function getAlign() : string {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->getAttribute( 'align' ) ?? '';
	}

	/**
	 * @param string $val
	 */
	public function setAlign( string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'align', $val );
	}

	/**
	 * @return string
	 */
	public function getBorder() : string {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->getAttribute( 'border' ) ?? '';
	}

	/**
	 * @param ?string $val
	 */
	public function setBorder( ?string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'border', $val ?? '' );
	}

}
