<?php

namespace Velhron\DadataBundle\Model\Response\Suggest;

class CountryResponse extends SuggestResponse
{
    /** Цифровой код страны */
    public string $code;

    /** Буквенный код альфа-2 */
    public string $alfa2;

    /** Буквенный код альфа-3 */
    public string $alfa3;

    /** Краткое наименование страны */
    public string $nameShort;

    /** Полное официальное наименование страны */
    public string $name;
}
