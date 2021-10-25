<?php

namespace Slickpay\Common\Gateway;

interface GatewayInterface
{
    /**
     * Returns an array with gateway configuration.
     *
     * @return array
     */
    public function getConfig(): array;

    /**
     * Returns a specific property in the config array.
     *
     * @param string $property
     * @return mixed
     */
    public function getConfigField(string $property);
}
