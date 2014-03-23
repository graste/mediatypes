<?php

namespace MediaTypes;

class Format
{
    const ATOMPUB_CATEGORY_XML = 'application/atomcat+xml';
    const ATOMPUB_SERVICE_XML = 'application/atomsvc+xml';
    const ATOM_XML = 'application/atom+xml';
    const FORM_URLENCODED = 'application/x-www-form-urlencoded';
    const HAL_JSON = 'application/hal+json';
    const HAL_XML = 'application/hal+xml';
    const HTML = 'text/html';
    const JSON = 'application/json';
    const LD_JSON = 'application/ld+json';
    const MULTIPART_FORM_DATA = 'multipart/form-data';
    const OCTET_STREAM = 'application/octet-stream';
    const OPEN_SEARCH_XML = 'application/opensearchdescription+xml';
    const TEXT_PLAIN = 'text/plain';
    const TEXT_XML = 'text/xml';
    const VND_AMUNDSEN_UBER_JSON = 'application/vnd.amundsen-uber+json';
    const VND_AMUNDSEN_UBER_XML = 'application/vnd.amundsen-uber+xml';
    const VND_COLLECTION_JSON = 'application/vnd.collection+json';
    const VND_ERROR_JSON = 'application/vnd.error+json';
    const VND_ERROR_XML = 'application/vnd.error+xml';
    const VND_GOOGLE_EARTH_KML_XML = 'application/vnd.google-earth.kml+xml';
    const VND_GOOGLE_EARTH_KMZ = 'application/vnd.google-earth.kmz';
    const VND_MASON_JSON = 'application/vnd.mason+json';
    const VND_SIREN_JSON = 'application/vnd.siren+json';
    const XHTML = 'application/xhtml+xml';
    const XML = 'application/xml';


    // - get formats by matching strings from e.g. Content-Type or Accept HTTP headers
    // - get all vendor formats
    // - get all formats of type (application, text, audio, image ...)
    // - get all formats of subtype (vendor, example ...)
}

