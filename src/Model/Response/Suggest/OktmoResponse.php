<?php

namespace Gruzoveek\DadataBundle\Model\Response\Suggest;

class OktmoResponse extends SuggestResponse
{
    /** Код ОКТМО */
    public string $oktmo;

    /** Тип муниципального района */
    public string $areaType;

    /** Код муниципального района */
    public string $areaCode;

    /** Название муниципального района */
    public string $area;

    /** Тип муниципального поселения
     *
     * 1 — городское поселение
     * 2 — сельское поселение
     * 3 — межселенная территория в составе муниципального района
     * 4 — внутригородской район городского округа */
    public string $subareaType;

    /** Код муниципального поселения */
    public string $subareaCode;

    /** Название муниципального поселения */
    public string $subarea;
}
