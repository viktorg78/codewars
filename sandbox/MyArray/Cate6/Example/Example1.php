<?php

namespace MyArray\Cate6\Example;

class Example1
{
    public static function duplicateEncode($word)
    {
        $arr = str_split(mb_strtolower($word));
        $arrMap = array_count_values($arr);
        $arr = array_map(function ($val) use ($arrMap) {
            return $arrMap[$val] === 1 ? '(' : ')';
        }, $arr);

        return implode('', $arr);
    }
}