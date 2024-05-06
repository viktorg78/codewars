<?php

namespace pattern\FactoryMethod;

class DeveloperFactory implements WorkerFactory
{

    public static function make()
    {
        return new Developer();
    }
}