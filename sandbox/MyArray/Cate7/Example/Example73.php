<?php

namespace MyArray\Cate7\Example;

class Example73
{
    public static function arrCheck($a)
    {
        return count($a) == count(array_filter($a, function ($val) {
                return gettype($val) == "array";
            }));
    }
}