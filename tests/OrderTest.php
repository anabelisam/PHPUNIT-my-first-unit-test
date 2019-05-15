<?php

use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{

    /**
     * @dataProvider getStatusData
     */
    public function testOrderStatus($status, $expected)
    {
        // Arrange
        $order = new Order();
        $order->setStatus($status);

        // Act
        $result = $order->isPacked();

        // Assert
        $this->assertEquals($expected, $result);
    }

    /**
     * @dataProvider getPaymentMethodData
     */
    public function testPaymentMethod($method, $expected)
    {
        $order = new Order();
        $order->setPaymentMethod($method);
        $result = $order->isCreditCard();
        $this->assertEquals($expected, $result);
    }

    public function getStatusData() 
    {
        return [
            ['Packed', true],
            ['Cancelled', false],
            ['Initiated', false],
            ['Validation', false],
        ];
    }

    public function getPaymentMethodData() 
    {
        return [
            ['cash', false],
            ['credit card', true]
        ];
    }
}