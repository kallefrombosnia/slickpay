<?php

namespace Slickpay\Common\Request;

use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\RequestInterface;
use Slickpay\Common\Request\RequestInterface as SlickpayRequestInterface;

abstract class AbstractRequest implements SlickpayRequestInterface
{
    protected RequestInterface $psr7Request;

    public function __construct()
    {
        $this->psr7Request = new Request($this->method(), $this->endpoint(), $this->headers(), $this->body());
    }
}
