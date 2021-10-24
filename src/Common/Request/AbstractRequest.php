<?php

namespace Slickpay\Common\Request;

use GuzzleHttp\Psr7\Request;
use Slickpay\Common\Request\RequestInterface;

abstract class AbstractRequest implements RequestInterface
{
    /**
     * PSR-7 request instance.
     * 
     * @var \Psr\Http\Message\RequestInterface 
     */
    public \Psr\Http\Message\RequestInterface $request;

    public function __construct()
    {
        $this->request = new Request($this->method(), $this->endpoint(), $this->headers(), \json_encode($this->body()));
    }

    /**
     * Returns an instance of PSR-7 request.
     * 
     * @return \Psr\Http\Message\RequestInterface
     */
    public function request(): \Psr\Http\Message\RequestInterface
    {
        return $this->request;
    }
}
