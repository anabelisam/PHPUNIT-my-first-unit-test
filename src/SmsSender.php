<?php


interface SmsSender
{
    public function send($destination, $message);
}