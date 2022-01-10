<?php

namespace Velhron\DadataBundle\Model\Request\Suggest;

use Velhron\DadataBundle\Model\Request\AbstractRequest;

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
