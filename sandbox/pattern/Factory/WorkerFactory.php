<?php

namespace pattern\Factory;

class WorkerFactory
{
    public static function make()
    {
        return new Worker();
    }
}