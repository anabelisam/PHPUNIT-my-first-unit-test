<?php

class NotificationSender
{
    private $service;

    public function __construct()
    {
        $this->service = new SmsOperator();
    }

    public function sendNotification()
    {
        $this->service->sendSms();
        return true;
    }
}