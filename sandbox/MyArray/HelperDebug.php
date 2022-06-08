<?php

namespace MyArray;

class HelperDebug extends MyDebug
{
    /**
     * массив
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setData($data)->debug();
    }


}