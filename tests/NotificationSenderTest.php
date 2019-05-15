<?php

use PHPUnit\Framework\TestCase;

class NotificationSenderTest extends TestCase
{
    public function testSendSms()
    {
        $service = $this->getMockBuilder(SmsOperator::class)
                        ->setMethods(['send'])
                        ->getMock();

        $service->expects($this->once())
                ->method('send')
                ->with('file.txt', 'Simulación de mensaje de texto');

        $notification = new NotificationSender($service);
        $this->assertTrue($notification->sendNotification('file.txt', 'Simulación de mensaje de texto'));
    }
}