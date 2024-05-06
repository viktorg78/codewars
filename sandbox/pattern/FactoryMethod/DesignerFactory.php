<?php

namespace pattern\FactoryMethod;

class DesignerFactory implements WorkerFactory
{

    public static function make()
    {
        return new Designer();
    }
}