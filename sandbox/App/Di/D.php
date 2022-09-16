<?php

namespace App\Di;

class D implements DInterfase
{
    private $arr = [];

    public function __construct($arr)
    {
        $this->arr = $arr;
    }


    public function send()
    {
        return $this->arr[0];
    }
}