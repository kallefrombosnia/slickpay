<?php

namespace Slickpay\Common\Response;

use Psr\Http\Message\MessageInterface;
use RuntimeException;

abstract class AbstractResponse implements ResponseInterface
{
    /**
     * PSR-7 response instance.
     *
     * @var MessageInterface
     */
    protected MessageInterface $response;

    public function __construct(MessageInterface $response)
    {
        $this->response = $response;
    }

    /**
     * Returns the instance of PSR-7 response.
     *
     * @return MessageInterface
     */
    public function response(): MessageInterface
    {
        return $this->response;
    }

    /**
     * Returns decoded response body.
     *
     * @return mixed
     */
    public function getBody()
    {
        return \json_decode(
            $this->response->getBody()->getContents(),
        );
    }
}
