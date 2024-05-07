<?php

namespace pattern\AbstractFactory;

class AuthorsDeveloperWorker implements DeveloperWorker
{
    public function work()
    {
        echo "Я свободный разработчик<br>";
    }
}