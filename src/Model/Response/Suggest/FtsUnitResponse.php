<?php

namespace Velhron\DadataBundle\Model\Response\Suggest;

class FtsUnitResponse extends SuggestResponse
{
    /** Код таможни */
    public string $code;

    /** Полное название */
    public string $name;

    /** Краткое название */
    public string $nameShort;

    /** ИНН */
    public string $inn;

    /** ОГРН */
    public string $ogrn;

    /** Код ОКПО */
    public string $okpo;

    /** Код организационно-структурной формы */
    public string $osf;

    /** Адрес */
    public string $address;

    /** Телефон */
    public string $phone;

    /** Факс */
    public string $fax;

    /** Адрес эл. почты */
    public string $email;
}
