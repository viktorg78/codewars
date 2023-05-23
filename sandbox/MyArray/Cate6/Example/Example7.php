<?php

namespace MyArray\Cate6\Example;

class Example7
{
    static function mini($x, $y)
    {
        return min($x, $y);
    }

    static function maxi($x, $y)
    {
        return max($x, $y);
    }

    static function com($x, $y)
    {
        return $x + $y;
    }

    static function lcmu($x, $y)
    {
        $x1 = abs($x);
        $y1 = abs($y);
        return $x1 * $y1 / self::gcdi($x1, $y1);
    }

    public static function gcdi($x, $y)
    {
        $x1 = abs($x);
        $y2 = abs($y);
        if ($x1 == 0 && $y2 == 0) return 0;
        if ($x1 == 0) return $y2;
        if ($y2 == 0) return $x1;
        $tempMin = self::mini($x1, $y2);
        $tempMax = self::maxi($x1, $y2);
        $tempArr = [];
        $tempArr2 = [];
        for ($i = 1; $i <= $tempMin; $i++) {
            if ($tempMin % $i == 0) $tempArr[] = $i;
        }
        foreach ($tempArr as $value) {
            if ($tempMax % $value == 0) $tempArr2[] = $value;
        }
        return end($tempArr2);
    }

    public static function oper_array($fct, $arr, $init)
    {
        if ($fct == 'com') {
            $temp = $init;
            $tempArr = [];
            foreach ($arr as $value) {
                $temp = self::com($temp, $value);
                $tempArr[] = $temp;
            }
            return $tempArr;
        }

        if ($fct == 'maxi') {
            $temp = $init;
            $tempArr = [];
            foreach ($arr as $value) {
                $temp = self::maxi($temp, $value);
                $tempArr[] = $temp;
            }
            return $tempArr;

        }

        if ($fct == 'mini') {
            $temp = $init;
            $tempArr = [];
            foreach ($arr as $value) {
                $temp = self::mini($temp, $value);
                $tempArr[] = $temp;
            }
            return $tempArr;
        }

        if ($fct == 'lcmu') {
            $temp = $init;
            $tempArr = [];
            foreach ($arr as $value) {
                $temp = self::lcmu($temp, $value);
                $tempArr[] = $temp;
            }
            return $tempArr;
        }

        if ($fct == 'gcdi') {
            $temp = $init;
            $tempArr = [];
            foreach ($arr as $value) {
                $temp = self::gcdi($temp, $value);
                $tempArr[] = $temp;
            }
            return $tempArr;
        }

    }


}