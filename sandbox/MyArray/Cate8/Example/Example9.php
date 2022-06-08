<?php

/*
 * Напишите функцию для преобразования имени в инициалы. Это ката строго состоит из двух слов с одним пробелом между ними.
 * На выходе должны быть две заглавные буквы с точкой, разделяющей их.
 * Это должно выглядеть так:
 *
 * Sam Harris => S.H
 * patrick feeney => P.F
 */

namespace MyArray\Cate8\Example;

class Example9
{
    /** @var string */
    private $data;
    /** @var string */
    private $str;

    public function __construct(string $data)
    {
        $this->data = $data;
        $this->solution();
    }

    private function solution()
    {
        $arr = array_map(
            function ($n) {
                $ans = ucfirst(mb_substr($n, 0, 1));
                return $ans;
            }, explode(' ', $this->data)
        );
        $this->str = implode('.', $arr);
    }

    public function getStr()
    {
        return $this->str;
    }
}
