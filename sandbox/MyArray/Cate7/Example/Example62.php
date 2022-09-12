<?php

namespace MyArray\Cate7\Example;

class Example62
{
    public static function checkIfFlush($cards)
    {
        $lear = $cards[0][strlen($cards[0]) - 1];
        foreach ($cards as $value) {
            if ($value[strlen($value) - 1] != $lear) {
                return false;
            }
        }
        return true;
    }
}