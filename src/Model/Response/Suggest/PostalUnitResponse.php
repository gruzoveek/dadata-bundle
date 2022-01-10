<?php

namespace Velhron\DadataBundle\Model\Response\Suggest;

class PostalUnitResponse extends SuggestResponse
{
    /** Почтовый индекс */
    public string $postalCode;

    /** Признак, что отделение закрыто */
    public string $isClosed;

    /** Тип отделения */
    public string $typeCode;

    /** Адрес одной строкой */
    public string $addressStr;

    /** КЛАДР-код населённого пункта */
    public string $addressKladrId;

    /** Код проверки адреса */
    public string $addressQc;

    /** Широта */
    public string $geoLat;

    /** Долгота */
    public string $geoLon;

    /** Режим работы в понедельник */
    public string $scheduleMon;

    /** Режим работы во вторник */
    public string $scheduleTue;

    /** Режим работы в среду */
    public string $scheduleWed;

    /** Режим работы в четверг */
    public string $scheduleThu;

    /** Режим работы в пятницу */
    public string $scheduleFri;

    /** Режим работы в субботу */
    public string $scheduleSat;

    /** Режим работы в воскресенье */
    public string $scheduleSun;
}
