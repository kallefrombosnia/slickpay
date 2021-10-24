<?php

namespace Slickpay\Common\Request;

use GuzzleHttp\Psr7\Request;
use Slickpay\Exceptions\MissingRequiredParameter;

abstract class AbstractRequest implements RequestInterface
{
    /**
     * An array of passed URL parameters.
     *
     * @var array
     */
    private array $parameters;

    /**
     * An array of passed headers.
     *
     * @var array
     */
    private array $headers;

    /**
     * PSR-7 request instance.
     *
     * @var \Psr\Http\Message\RequestInterface
     */
    public \Psr\Http\Message\RequestInterface $request;

    public function __construct(array $parameters, array $headers)
    {
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


    /**
     * Returns a value for request parameter.
     *
     * @param string $parameter
     * @param bool $throwException
     * @return mixed
     * @throws MissingRequiredParameter
     */
    protected function getParameter(string $parameter, bool $throwException = true)
    {
        if (array_key_exists($parameter, $this->parameters)) {
            return $this->parameters[$parameter];
        }

        if ($throwException) {
            throw new MissingRequiredParameter(
                \sprintf('Missing required URL parameter: [%s]', $parameter)
            );
        }
    }
}
