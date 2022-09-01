<?php

namespace MyArray\Cate7\Example;

class Example49
{
    public static function seaSick($s)
    {
        $arr = str_split($s);
        $transition = 0;
        for ($i = 0; $i < count($arr) - 1; $i++) {
            if ($arr[$i] != $arr[$i + 1]) $transition++;
        }
        return round(100 * $transition / count($arr)) >= 20 ? 'Throw Up' : 'No Problem';
    }

    public static function seaSick2($s)
    {
        return substr_count($s, '_~') + substr_count($s, '~_') > strlen($s) / 5 ? 'Throw Up' : 'No Problem';
    }
}