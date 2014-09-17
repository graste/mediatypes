<?php

namespace MediaTypes;

/**
 * @see https://www.iana.org/assignments/media-types/media-types.xhtml
 */
interface IMediaType
{
    public function getName();
    public function getTemplate();

    public function getType();
    public function getSubType();
    public function getSuffix();

    public function getOptionalParameters();
    public function getRequiredParameters();

    public function getFileExtensions();

    public function getTitle();
    public function getAbstract();
    public function getDescription();
    public function getReferences();

    public function getEncodingConsiderations();
    public function getSecurityConsiderations();
}

