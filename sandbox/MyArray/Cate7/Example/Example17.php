<?php

namespace MyArray\Cate7\Example;

class Example17
{
    /**
     * @param $divisor
     * @param $bound
     * @return mixed|void
     */
    public static function maxMultiple($divisor, $bound){
        for ($i=$bound; $i>0; $i--){
            $num = $i%$divisor;
            if (!$num) return $i;
        }
    }
}