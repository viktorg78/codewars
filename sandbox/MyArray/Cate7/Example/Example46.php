<?php

namespace MyArray\Cate7\Example;

class Example46
{
    public static function well($arr)
    {
        $arr = call_user_func_array('array_merge', $arr);
        $arr = array_map('strtolower', $arr);
        $i = 0;

        foreach ($arr as $value) {
            if ($value == 'good') $i++;
        }

        if ($i == 0) {
            return 'Fail!';
        } elseif ($i > 2) {
            return 'I smell a series!';
        } else
            return 'Publish!';
    }

    public static function well2($arr)
    {
        $count = 0;
        array_walk_recursive($arr, function (&$item, $key) use (&$count) {
            $count += strtolower($item) == 'good' ? 1 : 0;
        });
        return $count == 0 ? 'Fail!' : ($count > 2 ? 'I smell a series!' : 'Publish!');
    }
}