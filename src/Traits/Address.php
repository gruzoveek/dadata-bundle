<?php

namespace Gruzoveek\DadataBundle\Traits;

trait Address
{
    /** Индекс */
    public string $postalCode;

    /** Страна */
    public string $country;

    /** ISO-код страны (двухсимвольный) */
    public string $countryIsoCode;

    /** Федеральный округ */
    public string $federalDistrict;

    /** Код ФИАС региона */
    public string $regionFiasId;

    /** Код КЛАДР региона */
    public string $regionKladrId;

    /** ISO-код региона */
    public string $regionIsoCode;

    /** Регион с типом */
    public string $regionWithType;

    /** Тип региона (сокращенный) */
    public string $regionType;

    /** Тип региона */
    public string $regionTypeFull;

    /** Регион */
    public string $region;

    /** Код ФИАС района в регионе */
    public string $areaFiasId;

    /** Код КЛАДР района в регионе */
    public string $areaKladrId;

    /** Район в регионе с типом */
    public string $areaWithType;

    /** Тип района в регионе (сокращенный) */
    public string $areaType;

    /** Тип района в регионе */
    public string $areaTypeFull;

    /** Район в регионе */
    public string $area;

    /** Код ФИАС города */
    public string $cityFiasId;

    /** Код КЛАДР города */
    public string $cityKladrId;

    /** Город с типом */
    public string $cityWithType;

    /** Тип города (сокращенный) */
    public string $cityType;

    /** Тип города */
    public string $cityTypeFull;

    /** Город */
    public string $city;

    /** Код ФИАС района города (заполняется, только если район есть в ФИАС) */
    public string $cityDistrictFiasId;

    /** Код КЛАДР района города (не заполняется) */
    public string $cityDistrictKladrId;

    /** Район города с типом */
    public string $cityDistrictWithType;

    /** Тип района города (сокращенный) */
    public string $cityDistrictType;

    /** Тип района города */
    public string $cityDistrictTypeFull;

    /** Район города */
    public string $cityDistrict;

    /** Код ФИАС нас. пункта */
    public string $settlementFiasId;

    /** Код КЛАДР нас. пункта */
    public string $settlementKladrId;

    /** Населенный пункт с типом */
    public string $settlementWithType;

    /** Тип населенного пункта (сокращенный) */
    public string $settlementType;

    /** Тип населенного пункта */
    public string $settlementTypeFull;

    /** Населенный пункт */
    public string $settlement;

    /** Код ФИАС улицы */
    public string $streetFiasId;

    /** Код КЛАДР улицы */
    public string $streetKladrId;

    /** Улица с типом */
    public string $streetWithType;

    /** Тип улицы (сокращенный) */
    public string $streetType;

    /** Тип улицы */
    public string $streetTypeFull;

    /** Улица */
    public string $street;

    /** Код ФИАС дома */
    public string $houseFiasId;

    /** Код КЛАДР дома */
    public string $houseKladrId;

    /** Тип дома (сокращенный) */
    public string $houseType;

    /** Тип дома */
    public string $houseTypeFull;

    /** Дом */
    public string $house;

    /** Тип корпуса/строения (сокращенный) */
    public string $blockType;

    /** Тип корпуса/строения */
    public string $blockTypeFull;

    /** Корпус/строение */
    public string $block;

    /** Подъезд */
    public string $entrance;

    /** Этаж */
    public string $floor;

    /** Тип квартиры (сокращенный) */
    public string $flatType;

    /** Тип квартиры */
    public string $flatTypeFull;

    /** Квартира */
    public string $flat;

    /** Абонентский ящик */
    public string $postalBox;

    /** Код ФИАС */
    public string $fiasId;

    /** Уровень детализации, до которого адрес найден в ФИАС
     *
     * 0 — страна
     * 1 — регион
     * 3 — район
     * 4 — город
     * 5 — район города
     * 6 — населенный пункт
     * 7 — улица
     * 8 — дом
     * 65 — планировочная структура
     * -1 — иностранный или пустой */
    public string $fiasLevel;

    /** Код КЛАДР */
    public string $kladrId;

    /** Идентификатор объекта в базе GeoNames. Для российских адресов не заполняется */
    public string $geonameId;

    /** Признак центра района или региона
     *
     * 1 — центр района (Московская обл, Одинцовский р-н, г Одинцово)
     * 2 — центр региона (Новосибирская обл, г Новосибирск)
     * 3 — центр района и региона (Томская обл, г Томск)
     * 4 — центральный район региона (Тюменская обл, Тюменский р-н)
     * 0 — ничего из перечисленного (Московская обл, г Балашиха) */
    public string $capitalMarker;

    /** Код ОКАТО */
    public string $okato;

    /** Код ОКТМО */
    public string $oktmo;

    /** Код ИФНС для физических лиц */
    public string $taxOffice;

    /** Код ИФНС для организаций */
    public string $taxOfficeLegal;

    /** Список исторических названий объекта нижнего уровня
     *
     * Если подсказка до улицы — это прошлые названия этой улицы, если до города — города */
    public array $historyValues;

    /** Координаты: широта */
    public string $geoLat;

    /** Координаты: долгота */
    public string $geoLon;

    /** Код точности координат
     *
     * 0 — точные координаты
     * 1 — ближайший дом
     * 2 — улица
     * 3 — населенный пункт
     * 4 — город
     * 5 — координаты не определены */
    public string $qcGeo;

    /** Иерархический код адреса в ФИАС (СС+РРР+ГГГ+ППП+СССС+УУУУ+ДДДД) */
    public string $fiasCode;

    /** Признак актуальности адреса в ФИАС
     *
     * 0    — актуальный
     * 1–50 — переименован
     * 51   — переподчинен
     * 99   — удален */
    public string $fiasActualityState;

    /** Административный округ (только для Москвы) */
    public string $cityArea;

    /** Внутри кольцевой? */
    public string $beltwayHit;

    /** Расстояние от кольцевой в километрах */
    public string $beltwayDistance;

    /** Площадь квартиры */
    public string $flatArea;

    /** Рыночная стоимость м² */
    public string $squareMeterPrice;

    /** Рыночная стоимость квартиры */
    public string $flatPrice;

    /** Часовой пояс
     *
     * Часовой пояс города для России, часовой пояс страны — для иностранных адресов.
     * Если у страны несколько поясов, вернёт минимальный и максимальный через слеш: UTC+5/UTC+6. */
    public string $timezone;

    /** Список ближайших станций метро (до трёх штук) */
    public array $metro;
}
