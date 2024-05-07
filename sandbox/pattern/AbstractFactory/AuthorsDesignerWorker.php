<?php

namespace pattern\AbstractFactory;

class AuthorsDesignerWorker implements DesignerWorker
{
    public function work()
    {
        echo "Я свободный дизайнер";
    }
}