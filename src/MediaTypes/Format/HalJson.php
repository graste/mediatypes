<?php

namespace MediaTypes\Format;

use MediaTypes\AbstractFormat;
use MediaTypes\Registry;

class HalJson extends AbstractFormat
{
    public function __construct()
    {
        $this->media_type = new Application\HalJson();
    }

    public function getIdentifier()
    {
        return 'haljson';
    }
}

