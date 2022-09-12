<?php

namespace MyArray\Cate7\Example;

class Example67
{
    public static function killcount($counselors, $jason)
    {
        return array_column(array_filter($counselors, function ($val) use ($jason) {
            return $val[1] < $jason;
        }), 0);
    }
}