<?php

namespace MyArray\Cate7\Example;

class Example11
{
    /**
     * @param string $s
     * @return string
     */
    public static function spacify(string $s): string
    {
        return implode(' ', str_split($s));
    }
}
