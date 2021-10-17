<?php

namespace Slickpay\Tests\Gateway\Requests;

use Slickpay\Common\Request\AbstractRequest;

class ExampleRequest extends AbstractRequest
{
    public function getResponseClass(): string
    {
        return ExampleResponse::class;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getEndpoint(): string
    {
        return 'https://github.com/slickpay/slickpay';
    }

    public function getHeaders(): array
    {
        return [];
    }

    public function getBody()
    {
        return [];
    }
}
