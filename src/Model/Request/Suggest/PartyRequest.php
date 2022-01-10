<?php

namespace Velhron\DadataBundle\Model\Request\Suggest;

class PartyRequest extends SuggestRequest
{
    /** Ограничение по статусу организации */
    protected array $status;

    /** Ограничение по типу организации (LEGAL / INDIVIDUAL) */
    protected string $type;

    /** Ограничение по региону или городу */
    protected array $locations;

    /** Приоритет города при ранжировании */
    protected array $locations_boost;

    /** Ограничение по коду ОКВЭД */
    protected array $okved;
}
