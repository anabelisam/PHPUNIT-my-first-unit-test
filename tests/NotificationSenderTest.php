<?php

use PHPUnit\Framework\TestCase;

class NotificationSenderTest extends TestCase
{
    public function testSendSms()
    {
        $service = new NotificationSender();
        $this->assertTrue($service->sendNotification());
    }
}