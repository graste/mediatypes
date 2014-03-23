<?php

namespace MediaTypes;

/**
 * @see https://www.iana.org/assignments/media-types/media-types.xhtml
 */
interface IMediaType
{
    public function getName();
    public function getTitle();
    public function getTemplate();
    public function getType();
    public function getSubType();
    public function getRequiredParameters();
    public function getOptionalParameters();
    public function getFileExtensions();
    public function getDescription();
    public function getAbstract();
    public function getReferences();
}

