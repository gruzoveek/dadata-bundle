<?php

namespace Gruzoveek\DadataBundle\Model\Request\Suggest;

use Gruzoveek\DadataBundle\Model\Request\AbstractRequest;

abstract class SuggestRequest extends AbstractRequest
{
    /** Количество подсказок (результатов) */
    protected int $count;

    /** {@inheritdoc} */
    public function getBody(): array
    {
        return array_filter(get_object_vars($this), static function ($var) {
            return null !== $var;
        });
    }
}
