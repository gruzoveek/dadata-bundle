<?php

namespace Velhron\DadataBundle\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Velhron\DadataBundle\Exception\DadataException;
use Velhron\DadataBundle\Model\Request\AbstractRequest;
use Velhron\DadataBundle\RequestFactory;
use Velhron\DadataBundle\ResponseFactory;

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
