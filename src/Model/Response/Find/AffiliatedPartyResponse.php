<?php

namespace Velhron\DadataBundle\Model\Response\Find;

use Velhron\DadataBundle\Model\Response\Suggest\AddressResponse;
use Velhron\DadataBundle\Model\Response\Suggest\SuggestResponse;

class AffiliatedPartyResponse extends SuggestResponse
{
    /** ИНН */
    public string $inn;

    /** КПП */
    public string $kpp;

    /** ОГРН */
    public string $ogrn;

    /** Уникальный идентификатор в Дадате */
    public string $hid;

    /** Тип организации (LEGAL — юридическое лицо, INDIVIDUAL — индивидуальный предприниматель) */
    public string $type;

    /** Код ОКАТО */
    public string $okato;

    /** Код ОКТМО */
    public string $oktmo;

    /** Код ОКПО */
    public string $okpo;

    /** Код ОКОГУ */
    public string $okogu;

    /** Код ОКФС */
    public string $okfs;

    /** Код ОКВЭД */
    public string $okved;

    /** Версия справочника ОКВЭД (2001 или 2014) */
    public string $okvedType;

    /** Количество филиалов */
    public string $branchCount;

    /** Тип подразделения (MAIN — головная организация, BRANCH — филиал) */
    public string $branchType;

    /** Адрес одной строкой */
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
