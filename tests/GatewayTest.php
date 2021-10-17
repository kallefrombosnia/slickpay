<?php

namespace Slickpay\Tests;

use Slickpay\Slickpay;
use PHPUnit\Framework\TestCase;
use Slickpay\Tests\Gateway\Gateway;
use Slickpay\Common\Gateway\GatewayInterface;

class GatewayTest extends TestCase
{
    protected Slickpay $slickpay;

    public function setUp(): void
    {
        parent::setUp();

        $this->slickpay = new Slickpay();
    }

    public function testConstructingGateway(): void
    {
        $this->slickpay->setGateway(Gateway::class);

        $this->assertInstanceOf(GatewayInterface::class, $this->slickpay->getGateway());
    }
}
