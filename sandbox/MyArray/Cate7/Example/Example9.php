<?php

namespace MyArray\Cate7\Example;

class Example9
{
    public static function flatten_and_sort(array $array): array
    {
        $array = call_user_func_array('array_merge', $array);
        sort($array);
        return $array;
    }

    public static function flatten_and_sort2(array $array): array
    {
        $array = array_merge(...$array);
        sort($array);
        return $array;
    }
}
