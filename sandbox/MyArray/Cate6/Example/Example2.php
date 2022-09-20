<?php

namespace MyArray\Cate6\Example;

class Example2
{
    public static function inArray($array1, $array2)
    {
        $arr = array_map(function ($value) use ($array2) {
            return array_filter($array2, function ($val) use ($value) {
                return !is_bool(strripos($val, $value));
            }) ? $value : null;
        }, $array1);

        sort($arr);
        return array_values(array_filter($arr, function ($val) {
            return isset($val);
        }));
    }
}