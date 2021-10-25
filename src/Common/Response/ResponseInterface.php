<?php

namespace Slickpay\Common\Response;

use Psr\Http\Message\MessageInterface;
use Slickpay\Common\Request\RequestInterface;

interface ResponseInterface
{
    /**
     * Returns an instance of request.
     *
     * @return RequestInterface
     */
    public function getRequest(): RequestInterface;

    /**
     * Handler method for post-request actions.
     *
     * @return ResponseInterface
     */
    public function update(): self;

    /**
     * PSR-7 response instance.
     *
     * @return MessageInterface
     */
    public function response(): MessageInterface;

    /**
     * Helper method to access body of request.
     *
     * @return mixed
     */
    public function getBody();
}
