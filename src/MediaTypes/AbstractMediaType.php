<?php

namespace MediaTypes;

/**
 * @see https://www.iana.org/assignments/media-types/media-types.xhtml
 */
abstract class AbstractMediaType implements IMediaType
{
    abstract public function getName();
    abstract public function getTemplate();

    abstract public function getType();
    abstract public function getSubType();

    public function getTemplateAlternatives()
    {
        return array();
    }

    public function getSuffix()
    {
        return '';
    }

    public function getOptionalParameters()
    {
        return array();
    }

    public function getRequiredParameters()
    {
        return array();
    }

    public function getFileExtensions()
    {
        return array();
    }

    public function getTitle()
    {
        return '';
    }

    public function getAbstract()
    {
        return '';
    }

    public function getDescription()
    {
        return '';
    }

    public function getReferences()
    {
        return array(
            'RFC6838' => 'http://tools.ietf.org/html/rfc6838',
            'IANA' => 'http://www.iana.org/assignments/media-types/media-types.xhtml'
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

