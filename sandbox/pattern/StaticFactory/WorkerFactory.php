<?php

namespace pattern\StaticFactory;


class WorkerFactory
{

    public static function make($workerTitle):?Worker
    {
        $clasName = strtolower($workerTitle);

        if (class_exists($clasName)) {
            return new $clasName();
        }
       return null;
   }
}

