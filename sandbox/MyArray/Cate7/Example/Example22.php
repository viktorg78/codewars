<?php

namespace MyArray\Cate7\Example;

class Example22
{
    /**
     * @param array $arr
     * @return int
     */
    public static function minSum(array $arr): int
    {
        $sum = 0;
        $count = count($arr) / 2;
        for ($i = 0; $i < $count; $i++) {
            $max = max($arr);
            $min = min($arr);
            unset($arr[array_search($max, $arr)]);
            unset($arr[array_search($min, $arr)]);
            $sum += $max * $min;
        }
        return $sum;
    }

    /**
     * @param array $arr
     * @return int
     */
    public static function minSum2(array $arr): int
    {
        sort($arr);
        $result = 0;
        while ($arr) $result += array_pop($arr) * array_shift($arr);
        return $result;
    }
}