<?php

namespace Slickpay\Common\Request;

use GuzzleHttp\Psr7\Request;
use Slickpay\Common\Request\RequestInterface;

abstract class AbstractRequest implements RequestInterface
{
    public \Psr\Http\Message\RequestInterface $request;

    public function __construct()
    {
        $this->request = new Request($this->method(), $this->endpoint(), $this->headers(), \json_encode($this->body()));
    }

    public function request(): \Psr\Http\Message\RequestInterface
    {
        return $this->request;
    }
}
