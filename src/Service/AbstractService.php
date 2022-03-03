<?php

namespace Gruzoveek\DadataBundle\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Gruzoveek\DadataBundle\Exception\DadataException;
use Gruzoveek\DadataBundle\Model\Request\AbstractRequest;
use Gruzoveek\DadataBundle\RequestFactory;
use Gruzoveek\DadataBundle\ResponseFactory;

abstract class AbstractService
{
    /** API-ключ */
    protected string $token;

    /** Секретный ключ для стандартизации */
    protected string $secret;

    protected HttpClientInterface $httpClient;

    protected RequestFactory $requestFactory;

    protected ResponseFactory $responseFactory;

    public function __construct(
        string $token,
        string $secret,
        HttpClientInterface $httpClient,
        RequestFactory $requestFactory,
        ResponseFactory $responseFactory
    ) {
        $this->token = $token;
        $this->secret = $secret;
        $this->httpClient = $httpClient;
        $this->requestFactory = $requestFactory;
        $this->responseFactory = $responseFactory;
    }

    /** @throws DadataException */
    abstract protected function query(AbstractRequest $request): array;
}
