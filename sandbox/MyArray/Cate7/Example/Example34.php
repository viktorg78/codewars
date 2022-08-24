<?php

namespace MyArray\Cate7\Example;

class Example34
{
    /**
     * @param array $a
     * @return bool
     */
    public static function isSameLanguage(array $a): bool
    {
        $language = $a[0]['language'];
        $arr = array_filter($a, function ($val) use ($language) {
            return $val['language'] === $language;
        });
        return $arr === $a;
    }

    /**
     * @param array $a
     * @return bool
     */
    public static function isSameLanguage2(array $a): bool
    {
        return count(array_unique(array_column($a, 'language'))) == 1;
    }
}