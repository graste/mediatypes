<?php

namespace MediaTypes;

abstract class AbstractFormat implements IFormat
{
    protected $media_type = null;

    abstract public function getIdentifier();

    public function getMediaType()
    {
        return $this->media_type;
    }

    public function getMandatoryParameters()
    {
        return array();
    }

    public function getType()
    {
        return $this->media_type->getType();
    }

    public function getSubType()
    {
        return $this->media_type->getSubType();
    }

    public function getSuffix()
    {
        return $this->media_type->getSuffix();
    }

    public function getContentType()
    {
        return $this->media_type->getTemplate();
    }

    public function getAcceptableContentTypes()
    {
        return array_merge(
            $this->getContentType(),
            $this->media_type->getTemplateAlternatives()
        );
    }
}

