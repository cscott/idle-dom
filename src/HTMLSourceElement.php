<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

/**
 * HTMLSourceElement
 *
 * @see https://dom.spec.whatwg.org/#interface-htmlsourceelement
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
 * @property string $src
 * @property string $type
 * @property string $srcset
 * @property string $sizes
 * @property string $media
 * @phan-forbid-undeclared-magic-properties
 */
interface HTMLSourceElement extends HTMLElement {
	// Direct parent: HTMLElement

	/**
	 * @return string
	 */
	public function getSrc() : string;

	/**
	 * @param string $val
	 */
	public function setSrc( string $val ) : void;

	/**
	 * @return string
	 */
	public function getType() : string;

	/**
	 * @param string $val
	 */
	public function setType( string $val ) : void;

	/**
	 * @return string
	 */
	public function getSrcset() : string;

	/**
	 * @param string $val
	 */
	public function setSrcset( string $val ) : void;

	/**
	 * @return string
	 */
	public function getSizes() : string;

	/**
	 * @param string $val
	 */
	public function setSizes( string $val ) : void;

	/**
	 * @return string
	 */
	public function getMedia() : string;

	/**
	 * @param string $val
	 */
	public function setMedia( string $val ) : void;

}
