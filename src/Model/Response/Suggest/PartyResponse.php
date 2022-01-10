<?php

namespace Velhron\DadataBundle\Model\Response\Suggest;

class PartyResponse extends SuggestResponse
{
    /** ИНН */
    public string $inn;

    /** КПП */
    public string $kpp;

    /** ОГРН */
    public string $ogrn;

    /** Дата выдачи ОГРН */
    public string $ogrnDate;

    /** Уникальный идентификатор в Дадате */
    public string $hid;

    /** Тип организации */
    public string $type;

    /** Наименование */
    public array $name;

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

    /** Организационно-правовая форма */
    public array $opf;

    /** Руководитель */
    public array $management;

    /** Количество филиалов */
    public string $branchCount;

    /** Тип подразделения */
    public string $branchType;

    /** Адрес */
    public AddressResponse $address;

    /** Состояние */
    public string $state;

    /** Среднесписочная численность работников */
    public string $employeeCount;

    /** Коды ОКВЭД дополнительных видов деятельности */
    public array $okveds;

    /** Сведения о налоговой, ПФР и ФСС */
    public string $authorities;

    /** Гражданство ИП */
    public string $citizenship;

    /** Учредители компании */
    public array $founders;

    /** Руководители компании */
    public array $managers;

    /** Правопредшественники (только для юр. лиц) */
    public array $predecessors;

    /** Правопреемники (только для юр. лиц) */
    public array $successors;

    /** Уставной капитал компании */
    public string $capital;

    /** Налоговый режим, доходы, расходы, долги и штрафы */
    public string $finance;

    /** Документы и реестры */
    public string $documents;

    /** Лицензии */
    public array $licenses;

    /** Адреса эл. почты */
    public array $emails;

    /** Телефоны */
    public array $phones;

    public function __construct(array $data)
    {
        parent::__construct($data);

        if (isset($data['data']['address'])) {
            $this->address = new AddressResponse($data['data']['address']);
        }

        if (isset($data['data']['emails']) && is_array($data['data']['emails'])) {
            foreach ($data['data']['emails'] as $email) {
                $this->emails[] = new EmailResponse($email);
            }
        }

        if (isset($data['data']['phones']) && is_array($data['data']['phones'])) {
            foreach ($data['data']['phones'] as $phone) {
                $this->phones[] = new PhoneResponse($phone);
            }
        }
    }
}
