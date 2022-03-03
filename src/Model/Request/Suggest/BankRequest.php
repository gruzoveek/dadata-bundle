<?php

namespace Gruzoveek\DadataBundle\Model\Request\Suggest;

class BankRequest extends SuggestRequest
{
    /** Ограничение по статусу банка */
    protected array $status;

    /** Ограничение по типу банка
     *
     * Доступные типы:
     * BANK        - Банк
     * NKO         - Небанковская кредитная организация
     * BANK_BRANCH - Филиал банка
     * NKO_BRANCH  - Филиал небанковской кредитной организации
     * RKC         - РКЦ / ГРКЦ
     * OTHER       - Другое */
    protected array $type;

    /** Ограничение по региону или городу */
    protected array $locations;

    /** Приоритет города при ранжировании */
    protected array $locations_boost;
}
