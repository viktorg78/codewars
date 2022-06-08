<?php

namespace pattern\Factory3;

class CarFactory extends AbstractFactory
{
    /** @return PlasticCar */
    public function createFromPlastic(): PlasticCar
    {
        return new PlasticCar();
    }

    /** @return  WoodenCar */
    public function createFromWooden(): WoodenCar
    {
        return new WoodenCar();
    }
}
