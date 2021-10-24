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
        return \sprintf('https://github.com/slickpay/slickpay?foo=%s', $this->getParameter('foo', false));
    }

    public function headers(): array
    {
        return [
            'a' => 'b',
        ];
    }

    public function body()
    {
        return [];
    }
}
