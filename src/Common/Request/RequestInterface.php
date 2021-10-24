<?php

namespace Slickpay\Common\Request;

interface RequestInterface
{
    public function request(): \Psr\Http\Message\RequestInterface;

    public function response(): string;

    public function method(): string;

    public function endpoint(): string;

    public function headers(): array;

    public function body();
}
