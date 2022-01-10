<?php

namespace Velhron\DadataBundle\Model\Response\Suggest;

class RegionCourtResponse extends SuggestResponse
{
    /** Код суда */
    public string $code;

    /** Полное название */
    public string $name;

    /** Код региона (первые 2 цифры КЛАДР-кода) */
    public string $regionCode;
}
