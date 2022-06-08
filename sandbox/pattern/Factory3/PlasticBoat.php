<?php

namespace pattern\Factory3;

class PlasticBoat
{
    protected $material = ' - Пласмасса';

    /** @return string */
    public function drive(): string
    {
        return $this->material . ' Поплыли!';
    }
}
