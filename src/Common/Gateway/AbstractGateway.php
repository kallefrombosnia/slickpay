<?php

namespace Slickpay\Common\Gateway;

class AbstractGateway implements GatewayInterface
{
    protected array $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * Returns an array with gateway configuration.
     *
     * @return array
     */
    public function getConfig(): array
    {
        return $this->config;
    }

    /**
     * Returns a specific property in the config array.
     *
     * @param string $property
     * @return mixed
     */
    public function getConfigField(string $property)
    {
        return $this->config[$property] ?? null;
    }
}
