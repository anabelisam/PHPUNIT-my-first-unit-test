<?php

use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{

    /**
     * @dataProvider getPackedStatusData
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

    public function getPackedStatusData() 
    {
        return [
            ['Packed', true],
            ['Initialed', false],
        ];
    }
}