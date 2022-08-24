<?php

namespace MyArray\Cate7\Example;

class Example29
{
    public static function save(array $sizes, int $hd): int
    {
        $sum = 0;
        $arr = array_diff(
            array_map(function ($val) use ($hd, &$sum) {
                $sum += $val;
                if ($sum <= $hd) return $val;
            }, $sizes),
            ['']);

        return count($arr);
    }
}