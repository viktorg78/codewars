<?php

namespace MyArray\Cate7\Example;

use InvalidArgumentException;

class Example16
{
    /**
     * @param array $arr
     * @param int $newavg
     * @return false|float|int
     */
    public static function newAvg(array $arr, int $newavg)
    {
        if (count($arr) == 0)
            return $newavg;

        $ans = ceil($newavg * (count($arr) + 1) - array_sum($arr));

        if ($ans <= 0) {
            throw new  InvalidArgumentException('InvalidArgumentException');
        }
        return $ans;
    }
}