<?php

namespace Velhron\DadataBundle\Model\Request\Suggest;

class FioRequest extends SuggestRequest
{
    /** Пол (UNKNOWN / MALE / FEMALE) */
    protected string $gender;

    /** Подсказки по части ФИО */
    protected array $parts;
}
