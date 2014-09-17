<?php

namespace MediaTypes;

class Format implements IFormat
{
    public function getIdentifier();

    public function getType();
    public function getSubType();
    public function getSuffix();
    public function getParameters();

    public function getMediaType();
}

