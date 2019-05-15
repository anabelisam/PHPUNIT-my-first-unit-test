<?php

class Order
{
    private $status;
    private $payment_method;

    public function __construct()
    {
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function setPaymentMethod($method)
    {
        $this->payment_method = $method;
    }

    public function isPacked()
    {
        return $this->status == 'Packed';
    }

    public function isCreditCard()
    {
        return $this->payment_method == 'credit card';
    }
}