<?php

namespace Slickpay\Tests;

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\MessageInterface;
use Slickpay\Slickpay;
use Slickpay\Tests\Gateway\Requests\ExampleRequest;
use Slickpay\Tests\Gateway\Requests\ExampleResponse;

class ResponseTest extends TestCase
{
    protected Slickpay $slickpay;

    public function setUp(): void
    {
        parent::setUp();

        $this->slickpay = new Slickpay();
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
}
