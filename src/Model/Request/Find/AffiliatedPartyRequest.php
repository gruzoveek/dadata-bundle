<?php

namespace Velhron\DadataBundle\Model\Request\Find;

use Velhron\DadataBundle\Model\Request\Suggest\SuggestRequest;

class AffiliatedPartyRequest extends SuggestRequest
{
    /** Ограничение области поиска (FOUNDERS / MANAGERS) */
    protected array $scope;
}
