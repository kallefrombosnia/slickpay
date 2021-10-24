<?php

namespace Slickpay\Common\Request;

use GuzzleHttp\Psr7\Request;

abstract class AbstractRequest implements RequestInterface
{
    /**
     * User-passed body for the request.
     *
     * @var array
     */
    protected array $body;

    /**
     * An array of passed URL parameters.
     *
     * @var array
     */
    protected array $parameters;

    /**
     * An array of passed headers.
     *
     * @var array
     */
    protected array $headers;

    /**
     * PSR-7 request instance.
     *
     * @var \Psr\Http\Message\RequestInterface
     */
    public \Psr\Http\Message\RequestInterface $request;

    public function __construct(array $body, array $parameters, array $headers)
    {
        $this->body = $body;

        $this->parameters = $parameters;

        $this->headers = $headers;

        $this->request = new Request(
            $this->getMethod(),
            $this->getEndpoint(),
            \array_merge($this->getHeaders(), $this->headers),
            \json_encode($this->getBody())
        );
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
