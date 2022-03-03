<?php

namespace Gruzoveek\DadataBundle\Model\Response\Suggest;

class Okpd2Response extends SuggestResponse
{
    /** Индекс (раздел + код) */
    public string $idx;

    /** Код раздела */
    public string $razdel;

    /** Код */
    public string $kod;

    /** Наименование */
    public string $name;
}
