<?php

namespace Slickpay\Common\Response;

use Psr\Http\Message\MessageInterface;

abstract class AbstractResponse implements ResponseInterface
{
    protected MessageInterface $response;

    public function __construct(MessageInterface $response)
    {
        $this->response = $response;
    }

    public function response(): MessageInterface
    {
        return $this->response;
    }

    public function getBody()
    {
        return \json_decode(
            $this->response->getBody()->getContents(),
        );
    }
}
