<?php

namespace Gruzoveek\DadataBundle\Model\Response\Suggest;

class MetroResponse extends SuggestResponse
{
    /** КЛАДР-код города */
    public string $cityKladrId;

    /** ФИАС-код города */
    public string $cityFiasId;

    /** Название города */
    public string $city;

    /** Название станции */
    public string $name;

    /** Номер линии */
    public string $lineId;

    /** Название линии */
    public string $lineName;

    /** Широта */
    public string $geoLat;

    /** Долгота */
    public string $geoLon;

    /** Цвет линии в RGB */
    public string $color;

    /** Признак закрытия (true, если станция закрыта, false — если открыта) */
    public string $isClosed;
}
