<?php

namespace pattern\FactoryMethod;

class Designer implements Worker
{

    public function work()
    {
        echo 'Я дизайнер<br>';
    }
}