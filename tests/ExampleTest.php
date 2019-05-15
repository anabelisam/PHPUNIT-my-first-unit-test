<?php
use PHPUnit\Framework\TestCase;

class BasicTest extends TestCase
{

    /**
     * @dataProvider orderProvider
     */
    public function testPaymentMethod($method)
    {
        $this->assertEquals('credit card', $method);
    }

    public function orderProvider()
    {
        return [
            ['credit card'],
            ['cash']
        ];
    }
}