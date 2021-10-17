<?php

namespace Slickpay\Common\Response;

interface ResponseInterface
{
    public function update(): self;

    public function response(): \Psr\Http\Message\MessageInterface;

    public function getBody();
}
