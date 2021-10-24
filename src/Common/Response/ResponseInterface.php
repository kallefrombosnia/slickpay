<?php

namespace Slickpay\Common\Response;

use Psr\Http\Message\MessageInterface;

interface ResponseInterface
{
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
