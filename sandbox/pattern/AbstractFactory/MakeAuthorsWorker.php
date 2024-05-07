<?php

namespace pattern\AbstractFactory;

class MakeAuthorsWorker implements AbstractFactory
{

    public static function makeDeveloperWorker(): DeveloperWorker
    {
        return new AuthorsDeveloperWorker();
    }

    public static function makeDesignerWorker(): DesignerWorker
    {
        return new AuthorsDesignerWorker();
    }
}