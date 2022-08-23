<?php

namespace MyArray\Cate7\Example;

class Example25
{
    /**
     * @param array $a
     * @return false|int|string
     */
    public static function meeting(array $a)
    {
        $key = array_search('O', $a);
        return gettype($key) != 'boolean' ? $key : 'None available!';
    }

    public static function meeting1($a)
    {
        return in_array('O', $a) ? array_search('O', $a) : 'None available!';
    }
}