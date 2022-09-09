<?php

namespace MyArray\Cate7\Example;

class Example56
{
    public static function minMinMax($array)
    {
        $min = min($array);
        $max = max($array);
        $min2 = min($array);
        $array = array_diff($array, [min($array), max($array)]);
        sort($array);
        foreach ($array as $value) {
            $min2++;
            if ($value != $min2) break;
        }
        return [$min, $min2, $max];
    }
}