<?php

namespace Slickpay\Tests;

use Slickpay\Slickpay;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;

class HttpClientTest extends TestCase
{
    protected Slickpay $slickpay;

    public function setUp(): void
    {
        parent::setUp();

        $this->slickpay = new Slickpay();
    }

    public function testClientIsConstructedByDefault(): void
    {
        $this->assertInstanceOf(ClientInterface::class, $this->slickpay->getClient());
    }
}
