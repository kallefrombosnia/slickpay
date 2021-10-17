<?php

namespace Slickpay\Common\Request;

interface RequestInterface
{
    public function getPsr7Request(): \Psr\Http\Message\RequestInterface;

    public function getResponseClass(): string;

    public function getMethod(): string;

    public function getEndpoint(): string;

    public function getHeaders(): array;

    public function getBody();
}
