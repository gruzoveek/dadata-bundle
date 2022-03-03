<?php

namespace Gruzoveek\DadataBundle\Model\Request\Geolocate;

use Gruzoveek\DadataBundle\Model\Request\Suggest\SuggestRequest;

abstract class GeolocateRequest extends SuggestRequest
{
    /** Географическая широта */
    protected float $lat;

    /** Географическая долгота */
    protected float $lon;

    /** Радиус поиска в метрах */
    protected int $radius_meters;
}
