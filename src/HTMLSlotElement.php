<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

/**
 * HTMLSlotElement
 *
 * @see https://dom.spec.whatwg.org/#interface-htmlslotelement
 *
 * @property int $nodeType
 * @property string $nodeName
 * @property string $baseURI
 * @property bool $isConnected
 * @property Document|null $ownerDocument
 * @property Node|null $parentNode
 * @property Element|null $parentElement
 * @property NodeList $childNodes
 * @property Node|null $firstChild
 * @property Node|null $lastChild
 * @property Node|null $previousSibling
 * @property Node|null $nextSibling
 * @property ?string $nodeValue
 * @property ?string $textContent
 * @property Element|null $previousElementSibling
 * @property Element|null $nextElementSibling
 * @property HTMLCollection $children
 * @property Element|null $firstElementChild
 * @property Element|null $lastElementChild
 * @property int $childElementCount
 * @property HTMLSlotElement|null $assignedSlot
 * @property ?string $namespaceURI
 * @property ?string $prefix
 * @property string $localName
 * @property string $tagName
 * @property string $id
 * @property string $className
 * @property DOMTokenList $classList
 * @property string $slot
 * @property NamedNodeMap $attributes
 * @property ShadowRoot|null $shadowRoot
 * @property string $contentEditable
 * @property string $enterKeyHint
 * @property bool $isContentEditable
 * @property string $inputMode
 * @property DOMStringMap $dataset
 * @property string $nonce
 * @property int $tabIndex
 * @property string $title
 * @property string $lang
 * @property bool $translate
 * @property string $dir
 * @property bool $hidden
 * @property string $accessKey
 * @property string $accessKeyLabel
 * @property bool $draggable
 * @property bool $spellcheck
 * @property string $autocapitalize
 * @property string $innerText
 * @property Element|null $offsetParent
 * @property int $offsetTop
 * @property int $offsetLeft
 * @property int $offsetWidth
 * @property int $offsetHeight
 * @property string $name
 * @phan-forbid-undeclared-magic-properties
 */
interface HTMLSlotElement extends HTMLElement {
	// Direct parent: HTMLElement

	/**
	 * @return string
	 */
	public function getName() : string;

	/**
	 * @param string $val
	 */
	public function setName( string $val ) : void;

	/**
	 * @param AssignedNodesOptions|associative-array|null $options
	 * @return list<Node>
	 */
	public function assignedNodes( /* ?mixed */ $options = null ) : array;

	/**
	 * @param AssignedNodesOptions|associative-array|null $options
	 * @return list<Element>
	 */
	public function assignedElements( /* ?mixed */ $options = null ) : array;

}
