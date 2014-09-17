<?php

namespace MediaTypes\Registry\Application;

use MediaTypes\AbstractMediaType;

class Xml extends AbstractMediaType
{
    public function getName()
    {
        return 'XML';
    }

    public function getTitle()
    {
        return 'Extensible Markup Language';
    }

    public function getTemplate()
    {
        return 'application/xml';
    }

    public function getTemplateAlternatives()
    {
        return array(
            'text/xml'
        );
    }

    public function getType()
    {
        return 'application';
    }

    public function getSubType()
    {
        return 'xml';
    }

    public function getSuffix()
    {
        return '';
    }

    public function getRequiredParameters()
    {
        return array();
    }

    public function getOptionalParameters()
    {
        return array(
            'charset' => 'Defines the charset used for the representation.'
        );
    }

    public function getFileExtensions()
    {
        return array(
            '.xml'
        );
    }

    public function getDescription()
    {
        return <<<EOD
The Extensible Markup Language (XML) is a subset of SGML. Its goal is to
enable generic SGML to be served, received, and processed on the Web in
the way that is now possible with HTML. XML has been designed for ease of
implementation and for interoperability with both SGML and HTML.
EOD;
    }

    public function getAbstract()
    {
        return 'XML describes a class of data objects called documents ' .
            'and partially describes the behaviour of computer programs ' .
            'which process them. XML is a subset of SGML.';
    }

    public function getReferences()
    {
        return array(
            'SPEC1.0' => 'http://www.w3.org/TR/xml/',
            'RFC7303' => 'http://www.iana.org/go/rfc7303',
            'Wikipedia_EN' => 'http://en.wikipedia.org/wiki/XML'
        );
    }

    public function getEncodingConsiderations()
    {
        return <<<EOC
Depending on the character encoding used,
XML MIME entities can consist of 7bit, 8bit or binary data
[RFC6838].  For 7-bit transports, 7bit data, for example US-ASCII-
encoded data, does not require content-transfer-encoding, but 8bit
or binary data, for example UTF-8 or UTF-16 data, MUST be content-
transfer-encoded in quoted-printable or base64.  For 8-bit clean
transport (e.g. 8BITMIME ESMTP [RFC6152] or NNTP [RFC3977]), 7bit
or 8bit data, for example US-ASCII or UTF-8 data, does not require
content-transfer-encoding, but binary data, for example data with
a UTF-16 encoding, MUST be content-transfer-encoded in base64.

For binary clean transports (e.g.  BINARY ESMTP [RFC3030] or HTTP
[HTTPbis]), no content-transfer-encoding is necessary (or even
possible, in the case of HTTP) for 7bit, 8bit or binary data.
EOC;
    }

    public function getSecurityConsiderations()
    {
        return <<<EOT
See Section 10 of RFC7303: http://tools.ietf.org/html/rfc7303#section-10
EOT;
    }
}

