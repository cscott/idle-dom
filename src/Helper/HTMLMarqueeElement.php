<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

use Wikimedia\IDLeDOM\Element;

trait HTMLMarqueeElement {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\HTMLMarqueeElement $this';
		// @var \Wikimedia\IDLeDOM\HTMLMarqueeElement $this
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
			case "behavior":
				return $this->getBehavior();
			case "bgColor":
				return $this->getBgColor();
			case "direction":
				return $this->getDirection();
			case "height":
				return $this->getHeight();
			case "hspace":
				return $this->getHspace();
			case "scrollAmount":
				return $this->getScrollAmount();
			case "scrollDelay":
				return $this->getScrollDelay();
			case "trueSpeed":
				return $this->getTrueSpeed();
			case "vspace":
				return $this->getVspace();
			case "width":
				return $this->getWidth();
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
		'@phan-var \Wikimedia\IDLeDOM\HTMLMarqueeElement $this';
		// @var \Wikimedia\IDLeDOM\HTMLMarqueeElement $this
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
			case "behavior":
				return true;
			case "bgColor":
				return true;
			case "direction":
				return true;
			case "height":
				return true;
			case "hspace":
				return true;
			case "scrollAmount":
				return true;
			case "scrollDelay":
				return true;
			case "trueSpeed":
				return true;
			case "vspace":
				return true;
			case "width":
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
		'@phan-var \Wikimedia\IDLeDOM\HTMLMarqueeElement $this';
		// @var \Wikimedia\IDLeDOM\HTMLMarqueeElement $this
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
			case "behavior":
				$this->setBehavior( $value );
				return;
			case "bgColor":
				$this->setBgColor( $value );
				return;
			case "direction":
				$this->setDirection( $value );
				return;
			case "height":
				$this->setHeight( $value );
				return;
			case "hspace":
				$this->setHspace( $value );
				return;
			case "scrollAmount":
				$this->setScrollAmount( $value );
				return;
			case "scrollDelay":
				$this->setScrollDelay( $value );
				return;
			case "trueSpeed":
				$this->setTrueSpeed( $value );
				return;
			case "vspace":
				$this->setVspace( $value );
				return;
			case "width":
				$this->setWidth( $value );
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
		'@phan-var \Wikimedia\IDLeDOM\HTMLMarqueeElement $this';
		// @var \Wikimedia\IDLeDOM\HTMLMarqueeElement $this
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
			case "behavior":
				break;
			case "bgColor":
				break;
			case "direction":
				break;
			case "height":
				break;
			case "hspace":
				break;
			case "scrollAmount":
				break;
			case "scrollDelay":
				break;
			case "trueSpeed":
				break;
			case "vspace":
				break;
			case "width":
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
	public function getBehavior() : string {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->getAttribute( 'behavior' ) ?? '';
	}

	/**
	 * @param string $val
	 */
	public function setBehavior( string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'behavior', $val );
	}

	/**
	 * @return string
	 */
	public function getBgColor() : string {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->getAttribute( 'bgcolor' ) ?? '';
	}

	/**
	 * @param string $val
	 */
	public function setBgColor( string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'bgcolor', $val );
	}

	/**
	 * @return string
	 */
	public function getDirection() : string {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->getAttribute( 'direction' ) ?? '';
	}

	/**
	 * @param string $val
	 */
	public function setDirection( string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'direction', $val );
	}

	/**
	 * @return string
	 */
	public function getHeight() : string {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->getAttribute( 'height' ) ?? '';
	}

	/**
	 * @param string $val
	 */
	public function setHeight( string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'height', $val );
	}

	/**
	 * @return bool
	 */
	public function getTrueSpeed() : bool {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->hasAttribute( 'truespeed' );
	}

	/**
	 * @param bool $val
	 */
	public function setTrueSpeed( bool $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		if ( $val ) {
			$this->setAttribute( 'truespeed', '' );
		} else {
			$this->removeAttribute( 'truespeed' );
		}
	}

	/**
	 * @return string
	 */
	public function getWidth() : string {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->getAttribute( 'width' ) ?? '';
	}

	/**
	 * @param string $val
	 */
	public function setWidth( string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'width', $val );
	}

}
