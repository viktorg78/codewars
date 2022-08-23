<?php

namespace MyArray\Cate7\Example;

class Example23
{
    /**
     * @param array $array
     * @return int
     */
    public static function duplicates(array $array): int
    {
        $array = array_map(function ($val) {
            return (int)($val / 2);
        }, array_count_values($array));
        return array_sum($array);
    }

    /**
     * @param array $array
     * @return int
     */
    public static function duplicates1(array $array): int
    {
        return array_sum(array_map(function ($n) {
            return floor($n / 2);
        }, array_count_values($array)));
    }

}