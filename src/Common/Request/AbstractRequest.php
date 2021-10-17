<?php

namespace Slickpay\Common\Request;

use GuzzleHttp\Psr7\Request;
use Slickpay\Common\Request\RequestInterface;

abstract class AbstractRequest implements RequestInterface
{
    protected \Psr\Http\Message\RequestInterface $psr7Request;

    public function __construct()
    {
        $this->psr7Request = new Request($this->method(), $this->endpoint(), $this->headers(), $this->body());
    }
}
