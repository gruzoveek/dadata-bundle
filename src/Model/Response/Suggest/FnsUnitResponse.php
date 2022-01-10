<?php

namespace Velhron\DadataBundle\Model\Response\Suggest;

class FnsUnitResponse extends SuggestResponse
{
    /** Код инспекции */
    public string $code;

    /** Полное название */
    public string $name;

    /** Краткое название */
    public string $nameShort;

    /** Адрес */
    public string $address;

    /** Телефоны */
    public string $phone;

    /** ОКПО и режим работы */
    public string $comment;

    /** Получатель платежа */
    public string $paymentName;

    /** Коды ОКТМО бюджетополучателя */
    public string $oktmo;

    /** ИНН получателя */
    public string $inn;

    /** КПП получателя */
    public string $kpp;

    /** Название банка получателя */
    public string $bankName;

    /** БИК банка получателя */
    public string $bankBik;

    /** Корсчет банка получателя */
    public string $bankCorrespondentAccount;

    /** Номер счёта получателя */
    public string $bankAccount;

    /** Код регистрирующей инспекции */
    public string $parentCode;

    /** Полное название регистрирующей инспекции */
    public string $parentName;

    /** Адрес регистрирующей инспекции */
    public string $parentAddress;

    /** Телефоны регистрирующей инспекции */
    public string $parentPhone;

    /** Режим работы регистрирующей инспекции */
    public string $parentComment;
}
