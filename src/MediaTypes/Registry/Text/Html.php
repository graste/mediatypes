<?php

namespace MediaTypes\Registry\Text;

use MediaTypes\AbstractMediaType;

class Html extends AbstractMediaType
{
    public function getName()
    {
        return 'HTML';
    }

    public function getTitle()
    {
        return 'HyperText Markup Language';
    }

    public function getTemplate()
    {
        return 'text/html';
    }

    public function getType()
    {
        return 'text';
    }

    public function getSubType()
    {
        return 'html';
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
            '.html',
            '.htm'
        );
    }

    public function getDescription()
    {
        return <<<EOD
The World Wide Web's markup language has always been HTML. HTML was primarily designed as a language for semantically describing scientific documents, although its general design and adaptations over the years have enabled it to be used to describe a number of other types of documents.

The main area that has not been adequately addressed by HTML is a vague subject referred to as Web Applications.
EOD;
    }

    public function getAbstract()
    {
        return 'The markup language of the World Wide Web.';
    }

    public function getReferences()
    {
        return array(
            'SPEC' => 'http://www.w3.org/TR/html/',
            'W3C' => 'http://www.w3.org/html/',
            'Wikipedia_EN' => 'http://en.wikipedia.org/wiki/HTML',
            'Wikipedia_DE' => 'http://de.wikipedia.org/wiki/Hypertext_Markup_Language'
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

