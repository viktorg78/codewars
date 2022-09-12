<?php

namespace MyArray\Cate7\Example;

class Example64
{
    public static function roundUp($number, array $list)
    {
        if (count($list) <= 0) return [];
        $arr = array_map(function ($val) use ($number) {
            return abs($number - $val);
        }, $list);
        $search = min($arr);
        $searchArr = array_filter($arr, function ($val) use ($search) {
            return $val == $search;
        });

        return array_map(function ($val) use ($list) {
            return $list[$val];
        }, array_keys($searchArr));
    }

    public static function roundUp2(int $number, array $list)
    {
        if (!$list) return [];
        $min = min(array_map(function ($x) use ($number) {
            return abs($number - $x);
        }, $list));
        return array_values(array_filter($list, function ($x) use ($number, $min) {
            return abs($x - $number) == $min;
        }));
    }
}