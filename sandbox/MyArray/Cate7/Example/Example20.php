<?php

namespace MyArray\Cate7\Example;

class Example20
{
    /**
     * @param array $a
     * @return array
     */
    public static function countLanguages(array $a): array
    {
        $a = array_map(function ($val) {
            return $val['language'];
        }, $a);
        return array_count_values($a);
    }

    /**
     * @param array $a
     * @return array
     */
    public static function countLanguages2(array $a): array
    {
        return array_count_values(array_column($a, "language"));
    }
}