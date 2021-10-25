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

    public function testPassingConfig(): void
    {
        $this->slickpay->setGateway(Gateway::class);

        $this->assertSame([], $this->slickpay->getGateway()->getConfig());

        $this->slickpay->setGateway(Gateway::class, ['foo' => 'bar']);

        $this->assertSame(['foo' => 'bar'], $this->slickpay->getGateway()->getConfig());
    }

    public function testGettingConfigProperty(): void
    {
        $this->slickpay->setGateway(Gateway::class);

        $this->assertNull($this->slickpay->getGateway()->getConfigField('foo'));

        $this->slickpay->setGateway(Gateway::class, ['foo' => 'bar']);

        $this->assertSame('bar', $this->slickpay->getGateway()->getConfigField('foo'));
    }
}
