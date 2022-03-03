<?php

namespace Gruzoveek\DadataBundle\Model\Request\Find;

use Gruzoveek\DadataBundle\Model\Request\Suggest\SuggestRequest;

class AffiliatedPartyRequest extends SuggestRequest
{
    /** Ограничение области поиска (FOUNDERS / MANAGERS) */
    protected array $scope;
}
