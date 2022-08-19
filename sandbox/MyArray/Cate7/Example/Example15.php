<?php

namespace MyArray\Cate7\Example;
class Example15
{
    /**
     * @param string $s
     * @return int
     */
    public static function calc(string $s): int
    {
        $arr = str_split($s, 1);
        $arr = array_map(function ($val) {
            $s = ord($val);
            echo chr($s);
            return  $s;
        }, $arr);
        myDamp($arr);
        $arr2 = array_map(function ($val){
            $s = preg_replace('/7/', '1', $val);
            echo chr($s);
            return (int)$s;
        },$arr);
        myDamp($arr2);
        $arr3 = array_map(function ($val1,$val2){
            return $val1 - $val2;
        },$arr,$arr2);
        myDamp($arr3);
        return implode('',$arr3);
    }
}