<?php

namespace MyArray\Cate7\Example;

class Example32
{
    /**
     * @param string $str
     * @return bool
     */
    public static function divisibleByThree(string $str): bool
    {
        $arr = str_split($str);
        $sum = array_sum($arr);
        $nom = $sum / 3;
        return gettype($nom) == 'integer';
    }
}