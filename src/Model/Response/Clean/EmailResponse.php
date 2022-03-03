<?php

namespace Gruzoveek\DadataBundle\Model\Response\Clean;

use Gruzoveek\DadataBundle\Traits\Email;

class EmailResponse extends CleanResponse
{
    use Email;

    /** Стандартизованный email */
    public string $email;

    /** Тип адреса */
    public string $type;
}
