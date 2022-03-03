<?php

namespace Gruzoveek\DadataBundle\Model\Response\Find;

use Gruzoveek\DadataBundle\Model\Response\Suggest\SuggestResponse;

class DeliveryResponse extends SuggestResponse
{
    /** КЛАДР-код города */
    public string $kladrId;

    /** ФИАС-код города */
    public string $fiasId;

    /** Идентификатор города по справочнику Boxberry */
    public string $boxberryId;

    /** Идентификатор города по справочнику СДЭК */
    public string $cdekId;

    /** Идентификатор города по справочнику DPD */
    public string $dpdId;
}
