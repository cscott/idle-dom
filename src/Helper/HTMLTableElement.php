<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

use Wikimedia\IDLeDOM\Element;

trait HTMLTableElement {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\HTMLTableElement $this';
		// @var \Wikimedia\IDLeDOM\HTMLTableElement $this
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
			case "caption":
				return $this->getCaption();
			case "tHead":
				return $this->getTHead();
			case "tFoot":
				return $this->getTFoot();
			case "tBodies":
				return $this->getTBodies();
			case "rows":
				return $this->getRows();
			case "align":
				return $this->getAlign();
			case "border":
				return $this->getBorder();
			case "frame":
				return $this->getFrame();
			case "rules":
				return $this->getRules();
			case "summary":
				return $this->getSummary();
			case "width":
				return $this->getWidth();
			case "bgColor":
				return $this->getBgColor();
			case "cellPadding":
				return $this->getCellPadding();
			case "cellSpacing":
				return $this->getCellSpacing();
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
		'@phan-var \Wikimedia\IDLeDOM\HTMLTableElement $this';
		// @var \Wikimedia\IDLeDOM\HTMLTableElement $this
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
			case "caption":
				return $this->getCaption() !== null;
			case "tHead":
				return $this->getTHead() !== null;
			case "tFoot":
				return $this->getTFoot() !== null;
			case "tBodies":
				return true;
			case "rows":
				return true;
			case "align":
				return true;
			case "border":
				return true;
			case "frame":
				return true;
			case "rules":
				return true;
			case "summary":
				return true;
			case "width":
				return true;
			case "bgColor":
				return true;
			case "cellPadding":
				return true;
			case "cellSpacing":
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
		'@phan-var \Wikimedia\IDLeDOM\HTMLTableElement $this';
		// @var \Wikimedia\IDLeDOM\HTMLTableElement $this
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
			case "caption":
				$this->setCaption( $value );
				return;
			case "tHead":
				$this->setTHead( $value );
				return;
			case "tFoot":
				$this->setTFoot( $value );
				return;
			case "align":
				$this->setAlign( $value );
				return;
			case "border":
				$this->setBorder( $value );
				return;
			case "frame":
				$this->setFrame( $value );
				return;
			case "rules":
				$this->setRules( $value );
				return;
			case "summary":
				$this->setSummary( $value );
				return;
			case "width":
				$this->setWidth( $value );
				return;
			case "bgColor":
				$this->setBgColor( $value );
				return;
			case "cellPadding":
				$this->setCellPadding( $value );
				return;
			case "cellSpacing":
				$this->setCellSpacing( $value );
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
		'@phan-var \Wikimedia\IDLeDOM\HTMLTableElement $this';
		// @var \Wikimedia\IDLeDOM\HTMLTableElement $this
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
			case "caption":
				$this->setCaption( null );
				return;
			case "tHead":
				$this->setTHead( null );
				return;
			case "tFoot":
				$this->setTFoot( null );
				return;
			case "tBodies":
				break;
			case "rows":
				break;
			case "align":
				break;
			case "border":
				break;
			case "frame":
				break;
			case "rules":
				break;
			case "summary":
				break;
			case "width":
				break;
			case "bgColor":
				break;
			case "cellPadding":
				break;
			case "cellSpacing":
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
	 * @param string $val
	 */
	public function setBorder( string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'border', $val );
	}

	/**
	 * @return string
	 */
	public function getFrame() : string {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->getAttribute( 'frame' ) ?? '';
	}

	/**
	 * @param string $val
	 */
	public function setFrame( string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'frame', $val );
	}

	/**
	 * @return string
	 */
	public function getRules() : string {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->getAttribute( 'rules' ) ?? '';
	}

	/**
	 * @param string $val
	 */
	public function setRules( string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'rules', $val );
	}

	/**
	 * @return string
	 */
	public function getSummary() : string {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->getAttribute( 'summary' ) ?? '';
	}

	/**
	 * @param string $val
	 */
	public function setSummary( string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'summary', $val );
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

	/**
	 * @return string
	 */
	public function getBgColor() : string {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->getAttribute( 'bgcolor' ) ?? '';
	}

	/**
	 * @param ?string $val
	 */
	public function setBgColor( ?string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'bgcolor', $val ?? '' );
	}

	/**
	 * @return string
	 */
	public function getCellPadding() : string {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->getAttribute( 'cellpadding' ) ?? '';
	}

	/**
	 * @param ?string $val
	 */
	public function setCellPadding( ?string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'cellpadding', $val ?? '' );
	}

	/**
	 * @return string
	 */
	public function getCellSpacing() : string {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->getAttribute( 'cellspacing' ) ?? '';
	}

	/**
	 * @param ?string $val
	 */
	public function setCellSpacing( ?string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'cellspacing', $val ?? '' );
	}

}
