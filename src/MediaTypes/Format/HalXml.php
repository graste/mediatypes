<?php

namespace MediaTypes\Format;

use MediaTypes\AbstractFormat;
use MediaTypes\Registry;

class HalXml extends AbstractFormat
{
    public function __construct()
    {
        $this->media_type = new Application\HalXml();
    }

    public function getIdentifier()
    {
        return 'halxml';
    }
}

