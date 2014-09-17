<?php

namespace MediaTypes\Format;

use MediaTypes\AbstractFormat;
use MediaTypes\Registry;

class Text extends AbstractFormat
{
    public function __construct()
    {
        $this->media_type = new Text\Plain();
    }

    public function getIdentifier()
    {
        return 'text';
    }
}

