<?php

namespace MyArray\Cate7\Example;

class Example57
{
    public static function cubeOdd($a)
    {
        $aStr = array_filter($a, function ($val) {
            return gettype($val) !== 'integer';
        });
        if (count($aStr) !== 0) return NULL;

        return array_sum(array_filter(
            array_map(function ($val) {
                return $val * $val * $val;
            }, $a), function ($val) {
            return $val % 2 != 0;
        }));
    }
}