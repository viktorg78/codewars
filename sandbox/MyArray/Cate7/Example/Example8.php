<?php

namespace MyArray\Cate7\Example;

class Example8
{
    public static function tidyNumber(int $n): bool
    {
        $n = strval($n);
        $arrA = array_map('intval', str_split($n));
        $arrB = $arrA;
        sort($arrB);
        $res = array_diff_assoc($arrA, $arrB);
        return empty($res);
    }

    public static function tidyNumber2($n): bool
    {
        $ans = str_split($n);
        sort($ans);
        return str_split($n) == $ans;
    }
}