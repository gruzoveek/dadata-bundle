<?php

namespace Velhron\DadataBundle\Model\Response\Suggest;

class CarBrandResponse extends SuggestResponse
{
    /** Идентификатор марки */
    public string $id;

    /** Наименование марки */
    public string $name;

    /** Наименование марки на русском */
    public string $nameRu;
}
