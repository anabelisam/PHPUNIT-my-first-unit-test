<?php

class SmsOperator
{
    public function __constructor()
    {
    }

    public function sendSms()
    {
        $clientEmulator = 'client.txt';
        $handle = fopen($clientEmulator, 'w') or die('Cannot open file: '.$clientEmulator);
        $message = "\n".'Your payment method has changed to cash';
        $sendSms = fwrite($handle, $message);
        fclose($handle);
    }

}