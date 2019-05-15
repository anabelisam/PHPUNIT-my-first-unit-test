<?php

class SmsOperator implements SmsSender
{
    public function send($destination, $message)
    {
        $handle = fopen($destination, 'w') or die('Cannot open file: '.$destination); 
        $sendSms = fwrite($handle, $message);
        fclose($handle);
    }

}