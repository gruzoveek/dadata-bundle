<?php

namespace Gruzoveek\DadataBundle\Model\Response\Clean;

use Gruzoveek\DadataBundle\Model\Response\AbstractResponse;

abstract class CleanResponse extends AbstractResponse
{
    /** Исходное значение */
    public string $source;

    /** Стандартизированное значение */
    public string $result;

    /** Код проверки (указывает на то, необходимо ли вручную проверить полученный результат) */
    public int $qc;

    public function __construct(array $data)
    {
        foreach ($data as $property => $value) {
            $camelCaseProperty = $this->toCamelCase($property);
            if (property_exists($this, $camelCaseProperty)) {
                $this->{$camelCaseProperty} = $value;
            }
        }
    }
}
