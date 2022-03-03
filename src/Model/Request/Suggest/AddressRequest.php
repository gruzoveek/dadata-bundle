<?php

namespace Gruzoveek\DadataBundle\Model\Request\Suggest;

class AddressRequest extends SuggestRequest
{
    /** На каком языке вернуть результат (ru / en) */
    protected string $language;

    /** Ограничение области поиска */
    protected array $locations;

    /** Ограничение по радиусу окружности */
    protected array $locations_geo;

    /** Приоритет города при ранжировании */
    protected array $locations_boost;

    /** Гранулярные подсказки по адресу */
    protected array $from_bound;

    /** Гранулярные подсказки по адресу */
    protected array $to_bound;
}
