<?php

namespace pattern\factory;

class Factory
{
    /** @return Ship */
    public function createShip()
    {
        return new Ship();
    }

    /** @return Train */
    public function createTrain()
    {
        return new Train();
    }
}
