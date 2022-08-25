<?php

namespace MyArray\Cate7\Example;

class Example36
{
    /**
     * @param array $a
     * @return bool
     */
    public static function isRubyComing(array $a)
    {
        return in_array('Ruby', array_column($a, 'language'));
    }
}