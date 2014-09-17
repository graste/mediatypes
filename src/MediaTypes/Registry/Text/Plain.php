<?php

namespace MediaTypes\Registry\Text;

use MediaTypes\AbstractMediaType;

class Plain extends AbstractMediaType
{
    public function getName()
    {
        return 'plain';
    }

    public function getTitle()
    {
        return 'Plain text';
    }

    public function getTemplate()
    {
        return 'text/plain';
    }

    public function getType()
    {
        return 'text';
    }

    public function getSubType()
    {
        return 'plain';
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
            '.txt',
        );
    }

    public function getDescription()
    {
        return <<<EOD
The simplest and most important subtype of "text" is "plain".  This
indicates plain text that does not contain any formatting commands or
directives. Plain text is intended to be displayed "as-is", that is,
no interpretation of embedded formatting commands, font attribute
specifications, processing instructions, interpretation directives,
or content markup should be necessary for proper display.
EOD;
    }

    public function getAbstract()
    {
        return 'Plain text is the contents of an ordinary sequential file ' .
            'readable as textual material without much processing, usually ' .
            'opposed to formatted text or binary formats.';
    }

    public function getReferences()
    {
        return array_merge(
            parent::getReferences(),
            array(
                'RFC2046' => 'http://www.iana.org/go/rfc2046',
                'RFC3676' => 'http://www.iana.org/go/rfc3676',
                'RFC5147' => 'http://www.iana.org/go/rfc5147',
                'RFC5147' => 'http://www.iana.org/go/rfc5147',
                'Wikipedia_EN' => 'https://en.wikipedia.org/wiki/Plain_text',
                'Wikipedia_DE' => 'https://de.wikipedia.org/wiki/Plain_text'
            )
        );
    }

    public function getEncodingConsiderations()
    {
        return '';
    }

    public function getSecurityConsiderations()
    {
        return '';
    }
}

