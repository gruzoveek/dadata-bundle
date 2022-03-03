<?php

namespace Gruzoveek\DadataBundle\Model\Request\Suggest;

class FiasRequest extends SuggestRequest
{
    /** Ограничение области поиска */
    protected array $locations;

    /** Приоритет города при ранжировании */
    protected array $locations_boost;

    /** Гранулярные подсказки по ФИАС */
    protected array $from_bound;

    /** Гранулярные подсказки по ФИАС */
    protected array $to_bound;
}
