<?php

namespace Gruzoveek\DadataBundle\Model\Response\Clean;

class PhoneResponse extends CleanResponse
{
    /** Тип телефона */
    public string $type;

    /** Стандартизованный телефон одной строкой */
    public string $phone;

    /** Код страны */
    public string $countryCode;

    /** Код города / DEF-код */
    public string $cityCode;

    /** Локальный номер телефона */
    public string $number;

    /** Добавочный номер */
    public string $extension;

    /** Оператор связи (только для России) */
    public string $provider;

    /** Страна */
    public string $country;

    /** Регион (только для России) */
    public string $region;

    /** Город (только для стационарных телефонов) */
    public string $city;

    /** часовой пояс города для России, часовой пояс страны — для иностранных телефонов
     *
     * Если у страны несколько поясов, вернёт минимальный и максимальный через слеш: UTC+5/UTC+6 */
    public string $timezone;

    /** Признак конфликта телефона с адресом
     *
     * 0 - Телефон соответствует адресу
     * 2 - Города адреса и телефона отличаются
     * 3 - Регионы адреса и телефона отличаются */
    public int $qcConflict;
}
