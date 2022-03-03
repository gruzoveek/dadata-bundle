<?php

namespace Gruzoveek\DadataBundle\Model\Request\Iplocate;

use Gruzoveek\DadataBundle\Model\Request\AbstractRequest;
use Gruzoveek\DadataBundle\Model\Request\Suggest\SuggestRequest;

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
