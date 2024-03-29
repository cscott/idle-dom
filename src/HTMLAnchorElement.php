<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

/**
 * HTMLAnchorElement
 *
 * @see https://dom.spec.whatwg.org/#interface-htmlanchorelement
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
 * @property string $href
 * @property string $origin
 * @property string $protocol
 * @property string $username
 * @property string $password
 * @property string $host
 * @property string $hostname
 * @property string $port
 * @property string $pathname
 * @property string $search
 * @property string $hash
 * @property string $referrerPolicy
 * @property string $target
 * @property string $download
 * @property string $ping
 * @property string $rel
 * @property DOMTokenList $relList
 * @property string $hreflang
 * @property string $type
 * @property string $text
 * @property string $coords
 * @property string $charset
 * @property string $name
 * @property string $rev
 * @property string $shape
 * @phan-forbid-undeclared-magic-properties
 */
interface HTMLAnchorElement extends HTMLElement, HTMLHyperlinkElementUtils, ReferrerPolicy {
	// Direct parent: HTMLElement

	/**
	 * @return string
	 */
	public function getTarget() : string;

	/**
	 * @param string $val
	 */
	public function setTarget( string $val ) : void;

	/**
	 * @return string
	 */
	public function getDownload() : string;

	/**
	 * @param string $val
	 */
	public function setDownload( string $val ) : void;

	/**
	 * @return string
	 */
	public function getPing() : string;

	/**
	 * @param string $val
	 */
	public function setPing( string $val ) : void;

	/**
	 * @return string
	 */
	public function getRel() : string;

	/**
	 * @param string $val
	 */
	public function setRel( string $val ) : void;

	/**
	 * @return DOMTokenList
	 */
	public function getRelList();

	/**
	 * @return string
	 */
	public function getHreflang() : string;

	/**
	 * @param string $val
	 */
	public function setHreflang( string $val ) : void;

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
	public function getText() : string;

	/**
	 * @param string $val
	 */
	public function setText( string $val ) : void;

	/**
	 * @return string
	 */
	public function getCoords() : string;

	/**
	 * @param string $val
	 */
	public function setCoords( string $val ) : void;

	/**
	 * @return string
	 */
	public function getCharset() : string;

	/**
	 * @param string $val
	 */
	public function setCharset( string $val ) : void;

	/**
	 * @return string
	 */
	public function getName() : string;

	/**
	 * @param string $val
	 */
	public function setName( string $val ) : void;

	/**
	 * @return string
	 */
	public function getRev() : string;

	/**
	 * @param string $val
	 */
	public function setRev( string $val ) : void;

	/**
	 * @return string
	 */
	public function getShape() : string;

	/**
	 * @param string $val
	 */
	public function setShape( string $val ) : void;

}
