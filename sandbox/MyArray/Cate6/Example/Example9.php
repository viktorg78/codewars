<?php

namespace MyArray\Cate6\Example;

class Example9
{
    public static function createPhoneNumber($arr)
    {
        array_splice($arr, 0, 0, "(");
        array_splice($arr, 4, 0, ") ");
        array_splice($arr, 8, 0, "-");
        return implode($arr);
    }

//    тоже самое только регуляркой
    public static function createPhoneNumber2($numbersArray)
    {
        return vsprintf("(%d%d%d) %d%d%d-%d%d%d%d", $numbersArray);
    }
}