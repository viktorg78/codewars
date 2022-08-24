<?php

namespace MyArray\Cate7\Example;

class Example30
{
    /**
     * @param array $a
     * @return int
     */
    public static function countDevelopers(array $a): int
    {
        $arr = array_filter($a, function ($val) {
            return $val['language'] === 'JavaScript' && $val['continent'] === 'Europe';
        });
        return count($arr);
    }
}