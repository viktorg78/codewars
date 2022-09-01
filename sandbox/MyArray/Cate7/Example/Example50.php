<?php

namespace MyArray\Cate7\Example;

class Example50
{
    public static function pairs($arr)
    {
        $pairs = 0;
        if (count($arr) % 2 != 0)
            unset($arr[count($arr) - 1]);
        for ($i = 0; $i < count($arr) - 1; $i += 2) {
            $pairs += abs($arr[$i + 1] - $arr[$i]) == 1 ? 1 : 0;
        }
        return $pairs;
    }

    public static function pairs2($arr)
    {
        return count(
            array_filter(array_chunk($arr, 2), function ($e) {
                return max($e) - min($e) == 1;
            })
        );
    }

}