<?php

namespace Slickpay;

use Psr\Http\Client\ClientInterface;
use Slickpay\Common\Gateway\GatewayInterface;
use Slickpay\Common\Request\RequestInterface;

class Slickpay
{
    protected GatewayInterface $gateway;

    protected RequestInterface $request;

    protected ClientInterface $client;

    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    public function setGateway(string $gateway): self
    {
        $this->gateway = new $gateway();

        return $this;
    }

    public function getGateway(): GatewayInterface
    {
        return $this->gateway;
    }

    public function setRequest(string $request): self
    {
        $this->request = new $request();

        return $this;
    }

    public function getRequest(): RequestInterface
    {
        return $this->request;
    }

    public function setClient(ClientInterface $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getClient(): ClientInterface
    {
        return $this->client;
    }
}
