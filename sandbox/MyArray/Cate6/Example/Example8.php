<?php

namespace MyArray\Cate6\Example;

class Example8
{
    public static function tribonacci($signature = [1, 2, 3], $n = 4)
    {
        $arr = [];
        if ($n == 0) return $arr;
        $arr = $signature;
        if ($n == 1) {
            $arr2 = [];
            $arr2[] = $arr[0];
            return $arr2;
        };
        if ($n == 2) {
            $arr2 = [];
            $arr2[] = $arr[0];
            $arr2[] = $arr[1];
            return $arr2;
        }
        if ($n == 3) return $arr;
        for ($i = 2; $i <= $n - 2; $i++) {
            $arr[] = $arr[$i - 2] + $arr[$i - 1] + $arr[$i];
        }
        return $arr;
    }

    public static function tribonacci2(array $signature, int $n): array {
        for ($i = $n - 3; $i > 0; $i--) {
            $signature[] = array_sum(array_slice($signature, -3));
        }
        return array_slice($signature, 0, $n);
    }
}