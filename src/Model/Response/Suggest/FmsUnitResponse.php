<?php

namespace Gruzoveek\DadataBundle\Model\Response\Suggest;

class FmsUnitResponse extends SuggestResponse
{
    /** Код подразделения */
    public string $code;

    /** Название подразделения в творительном падеже («кем выдан?») */
    public string $name;

    /** Код региона (2 цифры) */
    public string $regionCode;

    /** Вид подразделения (1 цифра)
     *
     * 0 — подразделение ФМС
     * 1 — ГУВД или МВД региона
     * 2 — УВД или ОВД района или города
     * 3 — отделение полиции */
    public string $type;
}
