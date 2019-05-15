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

    public function testSend()
    {
        $service = $this->getMockBuilder(SmsOperator::class)
                        ->setMethods(['send'])
                        ->getMock();

        $service->expects($this->exactly(2))
                ->method('send')
                ->withConsecutive(
                    [$this->equalTo('file.txt'), 'This is a sms'],
                    [$this->equalTo('cliente.txt'), 'This is another sms']
                );

        $service->send('file.txt', 'This is a sms');
        $service->send('cliente.txt', 'This is another sms');
    }

    
}