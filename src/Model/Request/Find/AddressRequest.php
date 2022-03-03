<?php

namespace Gruzoveek\DadataBundle\Model\Request\Find;

class AddressRequest extends FindRequest
{
    /** На каком языке вернуть результат (ru / en) */
    protected string $language;
}
