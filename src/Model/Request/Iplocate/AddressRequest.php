<?php

namespace Velhron\DadataBundle\Model\Request\Iplocate;

use Velhron\DadataBundle\Model\Request\AbstractRequest;
use Velhron\DadataBundle\Model\Request\Suggest\SuggestRequest;

class AddressRequest extends SuggestRequest
{
    /** IP-адрес */
    protected string $ip;

    public function setQuery(string $ip): AbstractRequest
    {
        $this->ip = $ip;

        return $this;
    }
}
