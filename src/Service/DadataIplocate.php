<?php

namespace Gruzoveek\DadataBundle\Service;

use Symfony\Contracts\HttpClient\Exception\ExceptionInterface;
use Gruzoveek\DadataBundle\Exception\DadataException;
use Gruzoveek\DadataBundle\Exception\InvalidConfigException;
use Gruzoveek\DadataBundle\Model\Request\AbstractRequest;
use Gruzoveek\DadataBundle\Model\Request\Iplocate\AddressRequest;
use Gruzoveek\DadataBundle\Model\Response\AbstractResponse;
use Gruzoveek\DadataBundle\Model\Response\Suggest\AddressResponse;

class DadataIplocate extends AbstractService
{
    /** Обработчик для API по IP-адресу.
     *
     * @throws DadataException|InvalidConfigException */
    private function handle(string $method, string $ip, array $options = []): ?AbstractResponse
    {
        /* @var AddressRequest $request */
        $request = $this->requestFactory->create($method);

        $request
            ->setQuery($ip)
            ->fillOptions($options);

        $responseData = $this->query($request);

        return isset($responseData['location'])
            ? $this->responseFactory->create($method, $responseData['location'])
            : null;
    }

    /** {@inheritdoc} */
    protected function query(AbstractRequest $request): array
    {
        try {
            $response = $this->httpClient->request('GET', $request->getUrl(), [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                    'Authorization' => "Token {$this->token}",
                ],
                'query' => $request->getBody(),
            ]);

            return json_decode($response->getContent(), true) ?? [];
        } catch (ExceptionInterface $exception) {
            throw new DadataException($exception);
        }
    }

    /** Город по IP-адресу.
     *
     * - Определяет город по IP-адресу в России
     * - Поддерживает как IPv4, так и IPv6 адреса
     * - Возвращает детальную информацию о городе, в том числе почтовый индекс
     *
     * @param string $ip      IP-адрес
     * @param array  $options Дополнительные параметры запроса
     *
     * @return AddressResponse|null Ответ
     *
     * @throws DadataException|InvalidConfigException */
    public function iplocateAddress(string $ip, array $options = []): ?AddressResponse
    {
        return $this->handle('iplocateAddress', $ip, $options);
    }
}
