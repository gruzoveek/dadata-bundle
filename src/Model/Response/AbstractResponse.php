<?php

namespace Gruzoveek\DadataBundle\Model\Response;

abstract class AbstractResponse
{
    public function toCamelCase(string $value): string
    {
        return lcfirst(str_replace('_', '', ucwords($value, '_')));
    }
}
