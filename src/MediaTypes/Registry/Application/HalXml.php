<?php

namespace MediaTypes\Registry\Application;

class HalXml extends HalJson
{
    public function getName()
    {
        return 'HALXML';
    }

    public function getTitle()
    {
        return 'Hypertext Application Language in XML';
    }

    public function getTemplate()
    {
        return 'application/hal+xml';
    }

    public function getTemplateAlternatives()
    {
        return array(
            'application/vnd.hal+xml'
        );
    }

    public function getSuffix()
    {
        return '+xml';
    }

    public function getFileExtensions()
    {
        return array(
            '.xml',
            '.halxml'
        );
    }

    public function getEncodingConsiderations()
    {
        return 'Same as XML: text or binary depending on charset';
    }

    public function getSecurityConsiderations()
    {
        return <<<EOT
hal+xml shares security issues common to all XML content types.
hal+xml does not provide executable content. Information contained
in hal+xml documents do not require privacy or integrity services.
EOT;
    }
}

