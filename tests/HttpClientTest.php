<?php

namespace Slickpay\Tests;

use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;
use Slickpay\Slickpay;

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
