<?php

namespace Velhron\DadataBundle\Model\Response\Suggest;

class BankResponse extends SuggestResponse
{
    /** Банковский идентификационный код (БИК) ЦБ РФ */
    public string $bic;

    /** Банковский идентификационный код в системе SWIFT */
    public string $swift;

    /** ИНН */
    public string $inn;

    /** КПП */
    public string $kpp;

    /** Регистрационный номер в ЦБ РФ */
    public string $registrationNumber;

    /** Корреспондентский счет в ЦБ РФ */
    public string $correspondentAccount;

    /** Наименование */
    public array $name;

    /** Город для платежного поручения (поля справочника Tnp + Nnp) */
    public string $paymentCity;

    /** Тип кредитной организации */
    public array $opf;

    /** Адрес регистрации */
    public AddressResponse $address;

    /** Состояние */
    public array $state;

    public function __construct(array $data)
    {
        parent::__construct($data);

        if (isset($data['data']['address'])) {
            $this->address = new AddressResponse($data['data']['address']);
        }
    }
}
