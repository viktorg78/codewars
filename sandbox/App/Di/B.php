<?php

namespace App\Di;

class B implements BInterface
{
    public function send()
    {
        return 'это текст В';
    }
}