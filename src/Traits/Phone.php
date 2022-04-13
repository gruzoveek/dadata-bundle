<?php

namespace Gruzoveek\DadataBundle\Traits;

trait Phone
{
    /** телефон одной строкой как в ЕГРЮЛ */
    public ?string $source;

    /** тип телефона (мобильный, стационарный, ...) */
    public ?string $type;

    /** код страны */
    public ?string $countryCode;

    /** код города / DEF-код */
    public ?string $cityCode;

    /** локальный номер телефона */
    public ?string $number;

    /** оператор связи */
    public ?string $provider;

    /** регион */
    public ?string $region;

    /** город (только для стационарных телефонов) */
    public ?string $city;

    /** часовой пояс */
    public ?string $timezone;

    /** контактное лицо */
    public ?string $contact;
}
