<?php

namespace App\Di;

class A2
{
    public function __construct(DInterfase $calss)
    {
        echo 'это текста класса А2'.'<br>';
        echo $calss->send();
    }
}