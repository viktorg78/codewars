<?php

namespace pattern\AbstractFactory;

class NativeDeveloperWorker implements DeveloperWorker
{
    public function work()
    {
        echo "Я штатный разработчик<br>";
    }
}