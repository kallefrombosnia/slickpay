<?php

namespace Slickpay\Tests\Gateway\Requests;

use Slickpay\Common\Request\AbstractRequest;

class ExampleRequest extends AbstractRequest
{
    public function getResponse(): string
    {
        return ExampleResponse::class;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getEndpoint(): string
    {
        return \sprintf('https://github.com/slickpay/slickpay?foo=%s', $this->parameters['foo'] ?? '');
    }

    public function getHeaders(): array
    {
        return [
            'example' => 'value',
        ];
    }

    public function getBody()
    {
        return $this->body;
    }
}
