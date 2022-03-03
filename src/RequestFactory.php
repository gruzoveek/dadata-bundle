<?php
namespace Gruzoveek\DadataBundle;

use Gruzoveek\DadataBundle\Exception\InvalidConfigException;
use Gruzoveek\DadataBundle\Model\Request\AbstractRequest;

class RequestFactory
{
    protected Resolver $resolver;

    public function __construct(Resolver $resolver)
    {
        $this->resolver = $resolver;
    }

    /** @throws InvalidConfigException */
    public function create(string $methodName): AbstractRequest
    {
        $requestClass = $this->resolver->getMatchedRequest($methodName);

        if (null === $requestClass) {
            throw new InvalidConfigException("Для метода $methodName не указан параметр \"request\"");
        }

        $url = $this->resolver->getMatchedUrl($methodName);

        if (null === $url) {
            throw new InvalidConfigException("Для метода $methodName не указан параметр \"url\"");
        }

        return new $requestClass($url);
    }
}
