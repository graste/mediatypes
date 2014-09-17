<?php

namespace MediaTypes\Format;

use MediaTypes\AbstractFormat;
use MediaTypes\Registry;

class Atom extends AbstractFormat
{
    public function __construct()
    {
        $this->media_type = new Application\AtomXml();
    }

    public function getIdentifier()
    {
        return 'atom';
    }
}

