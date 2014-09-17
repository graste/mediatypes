<?php

namespace MediaTypes\Format;

use MediaTypes\AbstractFormat;
use MediaTypes\Registry;

class Xml extends AbstractFormat
{
    public function __construct()
    {
        $this->media_type = new Application\Xml();
    }

    public function getIdentifier()
    {
        return 'xml';
    }
}

