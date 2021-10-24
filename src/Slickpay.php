<?php

namespace Slickpay;

use Psr\Http\Client\ClientInterface;
use Psr\Http\Client\ClientExceptionInterface;
use Slickpay\Common\Gateway\GatewayInterface;
use Slickpay\Common\Request\RequestInterface;
use Slickpay\Common\Response\ResponseInterface;

class Slickpay
{
    /**
     * Instance of Slickpay gateway.
     *
     * @var GatewayInterface
     */
    protected GatewayInterface $gateway;

    /**
     * Instance of the Slickpay request.
     *
     * @var RequestInterface
     */
    protected RequestInterface $request;

    /**
     * Instance of PSR-18 HTTP client.
     *
     * @var ClientInterface
     */
    protected ClientInterface $client;

    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    /**
     * Set & construct gateway class.
     *
     * @param string $gateway
     * @return Slickpay
     */
    public function setGateway(string $gateway): self
    {
        $this->gateway = new $gateway();

        return $this;
    }

    /**
     * Returns an instance of gateway.
     *
     * @return GatewayInterface
     */
    public function getGateway(): GatewayInterface
    {
        return $this->gateway;
    }

    /**
     * Set & construct request class.
     *
     * @param string $request
     * @param array $parameters
     * @param array $headers
     * @return Slickpay
     */
    public function setRequest(string $request, array $body = [], array $parameters = [], array $headers = []): self
    {
        $this->request = new $request(
            $body,
            $parameters,
            $headers
        );

        return $this;
    }

    /**
     * Returns an instance of request.
     *
     * @return RequestInterface
     */
    public function getRequest(): RequestInterface
    {
        return $this->request;
    }

    /**
     * Set an instance of custom PSR-18 HTTP client.
     *
     * @param ClientInterface $client
     * @return Slickpay
     */
    public function setClient(ClientInterface $client): self
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Returns an instance of HTTP client.
     *
     * @return ClientInterface
     */
    public function getClient(): ClientInterface
    {
        return $this->client;
    }

    /**
     * Trigger request sending.
     *
     * @return ResponseInterface
     * @throws ClientExceptionInterface
     */
    public function send(): ResponseInterface
    {
        $response = $this->client->sendRequest(
            $this->request->request()
        );

        $responseClass = $this->request->getResponse();

        return (new $responseClass($response))->update();
    }
}
