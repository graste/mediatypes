<?php

namespace MediaTypes\Format;

use MediaTypes\AbstractFormat;
use MediaTypes\Registry;

class Html extends AbstractFormat
{
    public function __construct()
    {
        $this->media_type = new Text\Html();
    }

    public function getIdentifier()
    {
        return 'html';
    }

    public function getContentType()
    {
        return 'text/html';
    }

    public function getAcceptableContentTypes()
    {
        return array(
            'text/html',
            'application/xhtml+xml',
            '*/*'
        );
    }
}

