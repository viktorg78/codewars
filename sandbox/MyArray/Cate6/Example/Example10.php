<?php

namespace MyArray\Cate6\Example;

class Example10
{
    public static function decipherThis($str)
    {
        $arr1 = explode(' ', $str);
        $arr3 = array_map(function ($value) {
            $pattern = '/[a-z]/i';
            $replacement = '$1';
            $ch1 = chr(preg_replace($pattern, $replacement, $value));
            $pattern2 = '/[0-9]/i';
            $ch2 = preg_replace($pattern2, $replacement, $value);
            if (!$ch2) return $ch1;
            $ch2 = $ch1.$ch2;
            $buf = $ch2[1];
            $ch2[1] = $ch2[strlen($ch2) - 1];
            $ch2[strlen($ch2) - 1] = $buf;
            return $ch2;
        }, $arr1);

        return implode(' ', $arr3);
    }
}