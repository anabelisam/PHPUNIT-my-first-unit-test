<?php

class Order
{
    private $status;

    public function __construct()
    {
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function isPacked()
    {
        return $this->status == 'Packed';
    }
}