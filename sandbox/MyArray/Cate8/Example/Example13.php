<?php

/*
 * Завершите функцию квадратной суммы, чтобы она возводила в квадрат каждое переданное ей число, а затем суммировала результаты.
 * Например, для [1, 2, 2] он должен вернуть 9, потому что 1^2 + 2^2 + 2^2 = 9.
 */

namespace MyArray\Cate8\Example;

class Example13
{
    /** @var array */
    private $data;
    /** @var int */
    private $ans;

    public function __construct(array $data)
    {
        $this->data = $data;
        $this->solution();
    }

    private function solution(){
        $this->ans = array_sum(array_map(function ($n)
        {
            return pow($n, 2);
        }, $this->data));
    }

    public function getAns()
    {
        return $this->ans;
    }
}