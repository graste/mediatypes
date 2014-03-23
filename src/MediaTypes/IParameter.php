<?php

namespace MediaTypes;

interface IParameter
{
    public function getName();
    public function getValue();
    public function getFormat();
    public function getDescription();
}

