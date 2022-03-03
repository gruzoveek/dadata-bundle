<?php

namespace Gruzoveek\DadataBundle\Exception;

use Exception;
use Symfony\Contracts\HttpClient\Exception\ExceptionInterface;

class DadataException extends Exception
{
    public function __construct(ExceptionInterface $exception)
    {
        $message = match ($exception->getCode()) {
            400 => 'Некорректный запрос (невалидный JSON или XML)',
            401 => 'В запросе отсутствует API-ключ',
            403 => 'В запросе указан несуществующий API-ключ. Или не подтверждена почта. Или исчерпан дневной лимит по количеству запросов',
            405 => 'Неправильный метод запроса',
            413 => 'Слишком большая длина запроса или слишком много условий',
            429 => 'Слишком много запросов в секунду или новых соединений в минуту',
            default => 'Произошла внутренняя ошибка сервиса',
        };

        parent::__construct($message, $exception->getCode(), $exception);
    }
}
