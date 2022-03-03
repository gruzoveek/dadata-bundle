<?php

namespace Gruzoveek\DadataBundle\Model\Request;

abstract class AbstractRequest
{
    /** Текст запроса */
    protected string $query;

    /** URL запроса */
    private string $requestUrl;

    public function __construct(string $url)
    {
        $this->requestUrl = $url;
    }

    /** Тело запроса. */
    abstract public function getBody(): array;

    public function setQuery(string $query): self
    {
        $this->query = $query;

        return $this;
    }

    public function getUrl(): string
    {
        return $this->requestUrl;
    }

    public function fillOptions(array $data): self
    {
        foreach (get_object_vars($this) as $property => $value) {
            if (isset($data[$property])) {
                $this->{$property} = $data[$property];
            }
        }

        return $this;
    }
}
