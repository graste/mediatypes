<?php

namespace MediaTypes\Registry\Application;

use MediaTypes\AbstractMediaType;

class Json extends AbstractMediaType
{
    public function getName()
    {
        return 'JSON';
    }

    public function getTitle()
    {
        return 'JavaScript Object Notation';
    }

    public function getTemplate()
    {
        return 'application/json';
    }

    public function getTemplateAlternatives()
    {
        return array(
            'application/x-json'
        );
    }

    public function getType()
    {
        return 'application';
    }

    public function getSubType()
    {
        return 'json';
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
        return array();
    }

    public function getFileExtensions()
    {
        return array(
            '.json'
        );
    }

    public function getDescription()
    {
        return <<<EOD
JavaScript Object Notation (JSON) is a lightweight, text-based,
language-independent data interchange format. It was derived from
the ECMAScript Programming Language Standard. JSON defines a small
set of formatting rules for the portable representation of
structured data.
EOD;
    }

    public function getAbstract()
    {
        return 'JavaScript Object Notation (JSON) is a lightweight, ' .
           'text-based, language-independent data interchange format.';
    }

    public function getReferences()
    {
        return array(
            'RFC7159' => 'http://tools.ietf.org/html/rfc7159',
            'Wikipedia_EN' => 'http://en.wikipedia.org/wiki/JSON'
        );
    }

    public function getEncodingConsiderations()
    {
        return 'binary';
    }

    public function getSecurityConsiderations()
    {
        return <<<EOT
Generally, there are security issues with scripting languages. JSON
is a subset of JavaScript but excludes assignment and invocation.

Since JSON's syntax is borrowed from JavaScript, it is possible to
use that language's "eval()" function to parse JSON texts.  This
generally constitutes an unacceptable security risk, since the text
could contain executable code along with data declarations.  The same
consideration applies to the use of eval()-like functions in any
other programming language in which JSON texts conform to that
language's syntax.
EOT;
    }
}

