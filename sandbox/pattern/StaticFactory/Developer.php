<?php

namespace pattern\StaticFactory;

class Developer implements Worker
{
    public function work()
    {
        echo 'Я разрабочик';
    }
}