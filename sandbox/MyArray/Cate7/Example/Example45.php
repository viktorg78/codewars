<?php

namespace MyArray\Cate7\Example;

class Example45
{
    public static function alan($a)
    {
        $stopping = [
            'Rejection',
            'Disappointment',
            'Backstabbing Central',
            'Shattered Dreams Parkway'
        ];
        sort($stopping);
        $a = array_intersect($stopping, $a);
        sort($a);
        return ($a == $stopping) ? 'Smell my cheese you mother!' : 'No, seriously, run. You will miss it.';
    }

    public static function alan2(array $a)
    {
        $stopping = [
            'Rejection',
            'Disappointment',
            'Backstabbing Central',
            'Shattered Dreams Parkway'
        ];
        return array_diff($stopping, $a) ? 'No, seriously, run. You will miss it.' : 'Smell my cheese you mother!';
    }
}