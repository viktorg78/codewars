<?php

namespace MyArray\Cate7\Example;

class Example21
{
    /**
     * @param array $a
     * @return array
     */
    public static function greet_developers(array $a): array
    {
        return array_map(function ($a) {
            $a['greeting'] = "Hi {$a['first_name']}, what do you like the most about {$a['language']}?";
            return $a;
        }, $a);
    }
}