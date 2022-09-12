<?php

namespace MyArray\Cate7\Example;

class Example69
{
    /**
     * @param array $array
     * @param $start int
     * @param $length int
     * @return array
     */
    public static function sect_sort(array $array, $start, $length = 0)
    {
        $array2 = $length == 0 ? array_slice($array, $start) : array_slice($array, $start, $length);
        sort($array2);
        return $length == 0 ? array_merge(array_slice($array, 0, $start), $array2) : array_merge(array_slice($array, 0, $start), $array2, array_slice($array, $start + $length));
    }
}