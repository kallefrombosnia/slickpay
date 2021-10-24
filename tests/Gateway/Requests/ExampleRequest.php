<?php

namespace Slickpay\Tests\Gateway\Requests;

use Slickpay\Common\Request\AbstractRequest;

class ExampleRequest extends AbstractRequest
{
    public function response(): string
    {
        return ExampleResponse::class;
    }

    public function method(): string
    {
        return 'POST';
    }

    public function endpoint(): string
    {
        return 'https://github.com/slickpay/slickpay';
    }

    public function headers(): array
    {
        return [];
    }

    public function body()
    {
        return [];
    }
}
