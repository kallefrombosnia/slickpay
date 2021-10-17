<?php

namespace Slickpay;

use Slickpay\Common\Gateway\GatewayInterface;
use Slickpay\Common\Request\RequestInterface;

class Slickpay
{
    protected GatewayInterface $gateway;

    protected RequestInterface $request;

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
}
