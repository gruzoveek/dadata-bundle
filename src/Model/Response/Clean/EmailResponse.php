<?php

namespace Velhron\DadataBundle\Model\Response\Clean;

use Velhron\DadataBundle\Traits\Email;

class EmailResponse extends CleanResponse
{
    use Email;

    /** Стандартизованный email */
    public string $email;

    /** Тип адреса */
    public string $type;
}
