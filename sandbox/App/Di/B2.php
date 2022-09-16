<?php

namespace App\Di;

class B2 implements BInterface
{

    public function send()
    {
        return 'это В1 текст';
    }
}