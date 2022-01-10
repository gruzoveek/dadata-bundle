<?php

namespace Velhron\DadataBundle\Model\Response\General;

class StatResponse
{
    /** Дата */
    public mixed $date;

    /** Статистика использования сервиса поиска дублей */
    public mixed $merging;

    /** Статистика использования сервиса подсказок */
    public mixed $suggestions;

    /** Статистика использования сервиса стандартизации */
    public mixed $clean;

    public function __construct(array $data)
    {
        $this->date = $data['date'];
        $this->merging = $data['services']['merging'] ?? null;
        $this->suggestions = $data['services']['suggestions'] ?? null;
        $this->clean = $data['services']['clean'] ?? null;
    }
}
