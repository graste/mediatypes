<?php

namespace MediaTypes;

/**
 * A specific media type variant defined by the
 * base MediaType and the actual used parameters.
 */
interface IFormat
{
    public function getIdentifier();
    public function getMediaType();
    public function getContentType();
    public function getAcceptableContentTypes();
    public function getMandatoryParameters();
}
