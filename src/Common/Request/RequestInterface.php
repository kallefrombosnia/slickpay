<?php

namespace Slickpay\Common\Request;

interface RequestInterface
{
    /**
     * PSR-7 request instance.
     *
     * @return \Psr\Http\Message\RequestInterface
     */
    public function request(): \Psr\Http\Message\RequestInterface;

    /**
     * Define a response class for given request.
     *
     * @return string
     */
    public function response(): string;

    /**
     * Define a request method for given request.
     *
     * @return string
     */
    public function method(): string;

    /**
     * Define a request endpoint for given request.
     *
     * @return string
     */
    public function endpoint(): string;

    /**
     * Define an array of headers for given request.
     *
     * @return array
     */
    public function headers(): array;

    /**
     * Define body for the given request.
     *
     * @return mixed
     */
    public function body();
}
