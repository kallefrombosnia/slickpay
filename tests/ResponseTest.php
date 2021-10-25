<?php

namespace Slickpay\Tests;

use Slickpay\Slickpay;
use PHPUnit\Framework\TestCase;
use Slickpay\Tests\Gateway\Gateway;
use Psr\Http\Message\MessageInterface;
use Slickpay\Tests\Gateway\Requests\ExampleRequest;
use Slickpay\Tests\Gateway\Requests\ExampleResponse;

class ResponseTest extends TestCase
{
    protected Slickpay $slickpay;

    public function setUp(): void
    {
        parent::setUp();

        $this->slickpay = new Slickpay();

        $this->slickpay->setGateway(Gateway::class);
    }

    public function testConstructingResponse(): void
    {
        $response = $this->slickpay
            ->setRequest(ExampleRequest::class)
            ->send();

        $this->assertInstanceOf(ExampleResponse::class, $response);
    }

    public function testAccessingPsr7Response(): void
    {
        $response = $this->slickpay
            ->setRequest(ExampleRequest::class)
            ->send();

        $this->assertInstanceOf(MessageInterface::class, $response->response());
    }

    public function testAccessingRequestClass(): void
    {
        $this->slickpay->setRequest(ExampleRequest::class);

        $response = $this->slickpay->send();

        $this->assertInstanceOf(ExampleRequest::class, $response->getRequest());
    }
}
