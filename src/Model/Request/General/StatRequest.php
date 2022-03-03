<?php

namespace Gruzoveek\DadataBundle\Model\Request\General;

class StatRequest extends GeneralRequest
{
    /** Дата, за которую возвращается статистика */
    public string $date;
}
