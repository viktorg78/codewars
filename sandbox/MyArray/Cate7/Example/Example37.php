<?php

namespace MyArray\Cate7\Example;

class Example37
{
    public static function scrollingText($text)
    {
        $text = mb_strtoupper($text);
        $a = [$text];
        for ($i = 0; $i < strlen($text) - 1; $i++) {
            $t = $text[0];
            $text = substr($text, 1);
            $text .= $t;
            $a[] = $text;
        }
        return $a;
    }
}