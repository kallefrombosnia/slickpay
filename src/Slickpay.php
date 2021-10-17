<?php

namespace Slickpay;

use Slickpay\Common\Gateway\GatewayInterface;

class Slickpay
{
    protected GatewayInterface $gateway;

    public function setGateway(string $gateway): self
    {
        $this->gateway = new $gateway();

        return $this;
    }

    public function getGateway(): GatewayInterface
    {
        return $this->gateway;
    }
}
