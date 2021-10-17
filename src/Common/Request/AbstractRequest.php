<?php

namespace Slickpay\Common\Request;

use GuzzleHttp\Psr7\Request;
use Slickpay\Common\Request\RequestInterface;

abstract class AbstractRequest implements RequestInterface
{
    protected \Psr\Http\Message\RequestInterface $request;

    public function __construct()
    {
        $this->request = new Request($this->getMethod(), $this->getEndpoint(), $this->getHeaders(), \json_encode($this->getBody()));
    }

    public function getPsr7Request(): \Psr\Http\Message\RequestInterface
    {
        return $this->request;
    }
}
