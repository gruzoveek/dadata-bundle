<?php

namespace Gruzoveek\DadataBundle\Model\Request\General;

use Gruzoveek\DadataBundle\Model\Request\AbstractRequest;

abstract class GeneralRequest extends AbstractRequest
{
    /** {@inheritdoc} */
    public function getBody(): array
    {
        return array_filter(get_object_vars($this), static function ($var) {
            return null !== $var;
        });
    }
}
