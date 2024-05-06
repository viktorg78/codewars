<?php

namespace pattern\FactoryMethod;

class Developer implements Worker
{
    public function work()
    {
        echo 'Я разработчик<br>';
    }
}