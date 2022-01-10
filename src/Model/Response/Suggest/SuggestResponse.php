<?php

namespace Velhron\DadataBundle\Model\Response\Suggest;

use Velhron\DadataBundle\Model\Response\AbstractResponse;

abstract class SuggestResponse extends AbstractResponse
{
    /** Значение одной строкой (как показывается в списке подсказок) */
    public mixed $value;

    /** Значение */
    public mixed $unrestrictedValue;

    public function __construct(array $data)
    {
        $this->value = $data['value'] ?? null;
        $this->unrestrictedValue = $data['unrestricted_value'] ?? null;

        foreach ($data['data'] ?? [] as $property => $value) {
            $camelCaseProperty = $this->toCamelCase($property);
            if (property_exists($this, $camelCaseProperty)) {
                $this->{$camelCaseProperty} = $value;
            }
        }
    }
}
