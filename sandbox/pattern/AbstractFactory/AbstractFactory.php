<?php

namespace pattern\AbstractFactory;

interface AbstractFactory
{
    public static function makeDeveloperWorker(): DeveloperWorker;
    public static function makeDesignerWorker(): DesignerWorker;
}