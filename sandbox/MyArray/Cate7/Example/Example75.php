<?php

namespace MyArray\Cate7\Example;

class Example75
{
    public static function validName($array)
    {
        if (count($array) <= 0)
            return 'You must test at least one name.';
        elseif (count($array) == 1)
            return 'Congratulations, you can choose any name you like!';
        else {
            $t = 1;
            for ($i = 0; $i < count($array) - 1; $i++) {
                if (mb_strtolower($array[$i + 1][0]) == $array[$i][strlen($array[$i]) - 1]) $t++;
            }
        }
        if ($t == count($array))
            return 'Congratulations, your baby names are compatible!';
        else
            return 'Back to the drawing board, your baby names are not compatible.';
    }
}