<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

use Wikimedia\IDLeDOM\Document;
use Wikimedia\IDLeDOM\DOMTokenList;
use Wikimedia\IDLeDOM\HTMLCollection;
use Wikimedia\IDLeDOM\HTMLSlotElement;
use Wikimedia\IDLeDOM\NamedNodeMap;
use Wikimedia\IDLeDOM\Node;
use Wikimedia\IDLeDOM\NodeList;
use Wikimedia\IDLeDOM\ShadowRoot;

trait Element {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
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
	 * @param mixed $value
	 */
	public function __set( string $name, mixed $value ) : void {
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
	 * @return int
	 */
	abstract public function getNodeType() : int;

	/**
	 * @return string
	 */
	abstract public function getNodeName() : string;

	/**
	 * @return string
	 */
	abstract public function getBaseURI() : string;

	/**
	 * @return bool
	 */
	abstract public function getIsConnected() : bool;

	/**
	 * @return ?Document
	 */
	abstract public function getOwnerDocument() : ?Document;

	/**
	 * @return ?Node
	 */
	abstract public function getParentNode() : ?Node;

	/**
	 * @return ?\Wikimedia\IDLeDOM\Element
	 */
	abstract public function getParentElement() : ?\Wikimedia\IDLeDOM\Element;

	/**
	 * @return NodeList
	 */
	abstract public function getChildNodes() : NodeList;

	/**
	 * @return ?Node
	 */
	abstract public function getFirstChild() : ?Node;

	/**
	 * @return ?Node
	 */
	abstract public function getLastChild() : ?Node;

	/**
	 * @return ?Node
	 */
	abstract public function getPreviousSibling() : ?Node;

	/**
	 * @return ?Node
	 */
	abstract public function getNextSibling() : ?Node;

	/**
	 * @return ?string
	 */
	abstract public function getNodeValue() : ?string;

	/**
	 * @param ?string $value
	 */
	abstract public function setNodeValue( ?string $value ) : void;

	/**
	 * @return ?string
	 */
	abstract public function getTextContent() : ?string;

	/**
	 * @param ?string $value
	 */
	abstract public function setTextContent( ?string $value ) : void;

	/**
	 * @return ?\Wikimedia\IDLeDOM\Element
	 */
	abstract public function getPreviousElementSibling() : ?\Wikimedia\IDLeDOM\Element;

	/**
	 * @return ?\Wikimedia\IDLeDOM\Element
	 */
	abstract public function getNextElementSibling() : ?\Wikimedia\IDLeDOM\Element;

	/**
	 * @return HTMLCollection
	 */
	abstract public function getChildren() : HTMLCollection;

	/**
	 * @return ?\Wikimedia\IDLeDOM\Element
	 */
	abstract public function getFirstElementChild() : ?\Wikimedia\IDLeDOM\Element;

	/**
	 * @return ?\Wikimedia\IDLeDOM\Element
	 */
	abstract public function getLastElementChild() : ?\Wikimedia\IDLeDOM\Element;

	/**
	 * @return int
	 */
	abstract public function getChildElementCount() : int;

	/**
	 * @return ?HTMLSlotElement
	 */
	abstract public function getAssignedSlot() : ?HTMLSlotElement;

	/**
	 * @return ?string
	 */
	abstract public function getNamespaceURI() : ?string;

	/**
	 * @return ?string
	 */
	abstract public function getPrefix() : ?string;

	/**
	 * @return string
	 */
	abstract public function getLocalName() : string;

	/**
	 * @return string
	 */
	abstract public function getTagName() : string;

	/**
	 * @return string
	 */
	abstract public function getId() : string;

	/**
	 * @param string $value
	 */
	abstract public function setId( string $value ) : void;

	/**
	 * @return string
	 */
	abstract public function getClassName() : string;

	/**
	 * @param string $value
	 */
	abstract public function setClassName( string $value ) : void;

	/**
	 * @return DOMTokenList
	 */
	abstract public function getClassList() : DOMTokenList;

	/**
	 * @return string
	 */
	abstract public function getSlot() : string;

	/**
	 * @param string $value
	 */
	abstract public function setSlot( string $value ) : void;

	/**
	 * @return NamedNodeMap
	 */
	abstract public function getAttributes() : NamedNodeMap;

	/**
	 * @return ?ShadowRoot
	 */
	abstract public function getShadowRoot() : ?ShadowRoot;

}