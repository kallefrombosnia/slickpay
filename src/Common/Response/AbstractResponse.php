<?php

namespace Slickpay\Common\Response;

use Psr\Http\Message\MessageInterface;
use Slickpay\Common\Request\RequestInterface;

abstract class AbstractResponse implements ResponseInterface
{
    /**
     * Instance of request class.
     *
     * @var RequestInterface
     */
    protected RequestInterface $request;

    /**
     * PSR-7 response instance.
     *
     * @var MessageInterface
     */
    protected MessageInterface $response;

    public function __construct(RequestInterface $request, MessageInterface $response)
    {
        $this->request = $request;

        $this->response = $response;
    }

    /**
     * Returns an instance of request.
     *
     * @return RequestInterface
     */
    public function getRequest(): RequestInterface
    {
        return $this->request;
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
