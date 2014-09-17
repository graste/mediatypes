<?php

namespace MediaTypes\Registry\Application;

use MediaTypes\AbstractMediaType;

class HalJson extends AbstractMediaType
{
    public function getName()
    {
        return 'HAL';
    }

    public function getTitle()
    {
        return 'Hypertext Application Language in JSON';
    }

    public function getTemplate()
    {
        return 'application/hal+json';
    }

    public function getTemplateAlternatives()
    {
        return array(
            'application/vnd.hal+json'
        );
    }

    public function getType()
    {
        return 'application';
    }

    public function getSubType()
    {
        return 'hal';
    }

    public function getSuffix()
    {
        return '+json';
    }

    public function getRequiredParameters()
    {
        return array();
    }

    public function getOptionalParameters()
    {
        return array(
            'profile' => 'The profile link relation type that allows resource representations to indicate that they are following one or more profiles. This allows clients to learn about additional semantics (constraints, conventions, extensions) that are associated with the resource representation, in addition to those defined by the media type and possibly other mechanisms.'
        );
    }

    public function getFileExtensions()
    {
        return array(
            '.json',
            '.haljson'
        );
    }

    public function getDescription()
    {
        return <<<EOD
HAL is a simple format that gives a consistent and easy way to hyperlink between resources in your API.

Adopting HAL will make your API explorable, and its documentation easily discoverable from within the API itself. In short, it will make your API easier to work with and therefore more attractive to client developers.

APIs that adopt HAL can be easily served and consumed using open source libraries available for most major programming languages. It's also simple enough that you can just deal with it as you would any other JSON.
EOD;
    }

    public function getAbstract()
    {
        return 'HAL is a simple, generic hypermedia type based on JSON. It is ' .
            'designed for expressing links to and embeddedness of related resources.';
    }

    public function getReferences()
    {
        return array(
            'Spec' => 'http://stateless.co/hal_specification.html',
            'RFC' => 'https://tools.ietf.org/html/draft-kelly-json-hal',
            'SpecOnGithub' => 'https://github.com/mikekelly/hal_specification',
            'Wikipedia_EN' => 'http://en.wikipedia.org/wiki/Hypertext_Application_Language'
        );
    }

    public function getEncodingConsiderations()
    {
        return 'Same as JSON: binary';
    }

    public function getSecurityConsiderations()
    {
        return <<<EOT
hal+json shares security issues common to all JSON content types.
See RFC4627 Section #6 (http://tools.ietf.org/html/rfc4627#section-6)
for additional information. hal+json does not provide executable
content. Information contained in hal+json documents do not require
privacy or integrity services.
EOT;
    }
}

