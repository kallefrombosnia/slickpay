<?php

namespace Slickpay\Common\Request;

use Slickpay\Common\Gateway\GatewayInterface;

interface RequestInterface
{
    /**
     * PSR-7 request instance.
     *
     * @return \Psr\Http\Message\RequestInterface
     */
    public function request(): \Psr\Http\Message\RequestInterface;

    /**
     * Returns an instance of Gateway.
     *
     * @return GatewayInterface
     */
    public function getGateway(): GatewayInterface;

    /**
     * Define a response class for given request.
     *
     * @return string
     */
    public function getResponse(): string;

    /**
     * Define a request method for given request.
     *
     * @return string
     */
    public function getMethod(): string;

    /**
     * Define a request endpoint for given request.
     *
     * @return string
     */
    public function getEndpoint(): string;

    /**
     * Define an array of headers for given request.
     *
     * @return array
     */
    public function getHeaders(): array;

    /**
     * Define body for the given request.
     *
     * @return mixed
     */
    public function getBody();
}
