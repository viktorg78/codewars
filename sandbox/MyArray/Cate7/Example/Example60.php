<?php

namespace MyArray\Cate7\Example;

class Example60
{
    public static function duplicates($arr)
    {
        $arr = array_map(function ($val) {
            return gettype($val) === 'string' ? $val . '_' : $val;
        }, $arr);
        $arrUniq = array_unique($arr);
        foreach ($arrUniq as $key => $value) {
            unset($arr[$key]);
        }
        $arr = array_count_values($arr);
        $arr = array_keys($arr);
        return array_map(function ($val) {
            $len = strlen($val);
            return gettype($val) === 'string' ? mb_strcut($val, -$len, $len - 1) : $val;
        }, $arr);
    }

    public static function duplicates2($arr)
    {
        return array_values(
            array_unique(
                array_filter($arr, function ($value, $key) use ($arr) {
                    return $key != array_search($value, $arr, TRUE);
                }, ARRAY_FILTER_USE_BOTH)
            )
        );
    }
}