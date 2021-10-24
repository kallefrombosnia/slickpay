<?php

namespace Slickpay\Tests;

use Slickpay\Slickpay;
use PHPUnit\Framework\TestCase;
use Slickpay\Common\Request\RequestInterface;
use Slickpay\Tests\Gateway\Requests\ExampleRequest;

class RequestTest extends TestCase
{
    protected Slickpay $slickpay;

    public function setUp(): void
    {
        parent::setUp();

        $this->slickpay = new Slickpay();
    }

    public function testConstructingRequest(): void
    {
        $this->slickpay->setRequest(ExampleRequest::class);

        $this->assertInstanceOf(RequestInterface::class, $this->slickpay->getRequest());
    }

    public function testPassingEndpointProperties(): void
    {
        $this->slickpay->setRequest(ExampleRequest::class, ['foo' => 'bar']);

        $this->assertStringContainsString('bar', $this->slickpay->getRequest()->getEndpoint());
    }
}
