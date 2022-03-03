<?php

namespace Gruzoveek\DadataBundle\Model\Request\Geolocate;

class AddressRequest extends GeolocateRequest
{
    /** На каком языке вернуть результат (ru / en) */
    protected string $language;
}
