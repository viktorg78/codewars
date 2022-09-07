<?php

namespace MyArray\Cate7\Example;

class Example52
{
    public static function pendulum($values)
    {
        rsort($values);
        $arr = array_chunk($values, 2);
        $arr2 = [];
        $i = 0;
        $j = count($values) - 1;
        foreach ($arr as $value) {
            if (count($values) % 2 != 0)
                list($value[0], $value[1]) = array($value[1], $value[0]);
            if (isset($value[1])) $arr2[$i] = $value[1];
            if (isset($value[0])) $arr2[$j] = $value[0];
            $i++;
            $j--;
        }
        ksort($arr2);
        return $arr2;
    }

    public static function pendulum2($values)
    {
        $res = [];
        sort($values);
        foreach ($values as $k => $v) {
            $k & 1 ? array_push($res, $v) : array_unshift($res, $v);
        }
        return $res;
    }
}