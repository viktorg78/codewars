<?php

namespace MyArray\Cate7\Example;

class Example44
{
    public static function oddOnesOut($arr)
    {
        $arrUn = array_count_values($arr);
        foreach ($arrUn as $key => $value) {
            if ($value % 2 !== 0) {
                for ($i = 0; $i < $value; $i++)
                    unset($arr[array_search($key, $arr)]);
            }
        }
        return array_values($arr);
    }

    public static function oddOnesOut2($arr)
    {
        $count = array_count_values($arr);
        return array_values(array_filter($arr, function ($n) use ($count) {
            return $count[$n] % 2 == 0;
        }));
    }
}