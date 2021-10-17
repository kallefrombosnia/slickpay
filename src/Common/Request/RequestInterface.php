<?php

namespace Slickpay\Common\Request;

interface RequestInterface
{
    public function method(): string;

    public function endpoint(): string;

    public function headers(): array;

    public function body();
}
