<?php

namespace MyArray\Cate7\Example;

class Example6
{
    public static function last(string $x): array
    {
        $arr = explode(' ', $x);
        $arrStr = array_map(function ($arr) {
            return mb_strimwidth(strrev($arr), 0, 1);
        }, $arr);
        asort($arrStr);
        return array_map(function ($id) use ($arr) {
            return $arr[$id];
        }, array_keys($arrStr));
    }

    // сортируем массив по последнему символу
    public static function lastAlternative($x)
    {
        $words = explode(' ', $x);
        usort($words, function($a, $b) {
            return $a[strlen($a) -1] <=> $b[strlen($b) -1];
        });

        return $words;
    }
}