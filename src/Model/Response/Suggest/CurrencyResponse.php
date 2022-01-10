<?php

namespace Velhron\DadataBundle\Model\Response\Suggest;

class CurrencyResponse extends SuggestResponse
{
    /** Цифровой код валюты */
    public string $code;

    /** Буквенный код валюты */
    public string $strcode;

    /** Наименование валюты */
    public string $name;

    /** Страна, в которой эта валюта является ее денежной единицей */
    public string $country;
}
