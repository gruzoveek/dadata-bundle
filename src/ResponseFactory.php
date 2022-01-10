<?php

namespace Velhron\DadataBundle;

use Velhron\DadataBundle\Exception\InvalidConfigException;
use Velhron\DadataBundle\Model\Response\AbstractResponse;

class ResponseFactory
{
    protected Resolver $resolver;

    public function __construct(Resolver $resolver)
    {
        $this->resolver = $resolver;
    }

    /** @throws InvalidConfigException */
    public function create(string $methodName, array $data): AbstractResponse
    {
        $responseClass = $this->resolver->getMatchedResponse($methodName);

        if (null === $responseClass) {
            throw new InvalidConfigException("Для метода $methodName не указан параметр \"response\"");
        }

        return new $responseClass($data);
    }
}
