<?php

namespace Slickpay\Tests\Gateway\Requests;

use Slickpay\Common\Response\AbstractResponse;
use Slickpay\Common\Response\ResponseInterface;

class ExampleResponse extends AbstractResponse
{
    public function update(): ResponseInterface
    {
        //

        return $this;
    }
}
