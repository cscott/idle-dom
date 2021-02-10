<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\Document;
use Wikimedia\IDLeDOM\DocumentType;
use Wikimedia\IDLeDOM\XMLDocument;

trait DOMImplementation {

	/**
	 * @return \Exception
	 */
	abstract public function unimplemented() : \Exception;

	/**
	 * @param string $qualifiedName
	 * @param string $publicId
	 * @param string $systemId
	 * @return DocumentType
	 */
	public function createDocumentType( string $qualifiedName, string $publicId, string $systemId ) : DocumentType {
		throw self::unimplemented();
	}

	/**
	 * @param ?string $namespace
	 * @param string $qualifiedName
	 * @param ?DocumentType $doctype
	 * @return XMLDocument
	 */
	public function createDocument( ?string $namespace, string $qualifiedName, ?DocumentType $doctype = null ) : XMLDocument {
		throw self::unimplemented();
	}

	/**
	 * @param ?string $title
	 * @return Document
	 */
	public function createHTMLDocument( ?string $title = null ) : Document {
		throw self::unimplemented();
	}

	/**
	 * @return bool
	 */
	public function hasFeature() : bool {
		throw self::unimplemented();
	}

}