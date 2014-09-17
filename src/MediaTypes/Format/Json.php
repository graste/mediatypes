<?php

namespace MediaTypes\Format;

use MediaTypes\AbstractFormat;
use MediaTypes\Registry;

class Json extends AbstractFormat
{
    public function __construct()
    {
        $this->media_type = new Application\Json();
    }

    public function getIdentifier()
    {
        return 'json';
    }
}

