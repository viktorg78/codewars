<?php

namespace pattern\Factory3;

abstract class AbstractFactory
{
    abstract public function createFromPlastic();
    abstract public function createFromWooden();
}