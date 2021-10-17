<?php

namespace Slickpay\Tests;

use PHPUnit\Framework\TestCase;
use Slickpay\Slickpay;

class ResponseTest extends TestCase
{
    protected Slickpay $slickpay;

    public function setUp(): void
    {
        parent::setUp();

        $this->slickpay = new Slickpay();
    }
}
