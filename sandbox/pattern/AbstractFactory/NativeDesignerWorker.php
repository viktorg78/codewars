<?php

namespace pattern\AbstractFactory;

class NativeDesignerWorker implements DesignerWorker
{
    public function work()
    {
        echo "Я штатный дизайнер<br>";
    }
}