<?php

class NotificationSender
{
    private $service;

    public function __construct(SmsOperator $service)
    {
        $this->service = $service;
    }

    public function sendNotification($destination, $message)
    {
        $this->service->send($destination, $message);
        return true;
    }
}