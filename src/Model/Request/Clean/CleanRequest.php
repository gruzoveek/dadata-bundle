<?php

namespace Gruzoveek\DadataBundle\Model\Request\Clean;

use Gruzoveek\DadataBundle\Model\Request\AbstractRequest;

abstract class CleanRequest extends AbstractRequest
{
    /** {@inheritdoc} */
    public function getBody(): array
    {
        return [$this->query];
    }
}
