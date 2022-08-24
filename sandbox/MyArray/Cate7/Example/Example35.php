<?php

namespace MyArray\Cate7\Example;

class Example35
{
    /**
     * @param array $a
     * @return string
     */
    public static function getFirstPython(array $a): string
    {
        $a = array_filter($a, function ($arr) {
            return $arr['language'] === 'Python';
        });
        array_splice($a, 1);

        return !empty($a) ? $a[0]['first_name'] . ', ' . $a[0]['country'] : 'There will be no Python developers';
    }

    /**
     * @param array $a
     * @return string
     */
    public static function getFirstPython2(array $a): string
    {
        $key = array_search('Python', array_column($a, 'language'));

        return ($key === false) ? 'There will be no Python developers' : $a[$key]['first_name'] . ', ' . $a[$key]['country'];
    }
}