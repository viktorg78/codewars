<?php

/*
 * Создайте функцию с двумя аргументами, которая будет возвращать массив первых (n) кратных (x).
 * Предположим, что и заданное число, и количество подсчетов будут положительными числами больше 0.
 * Верните результаты в виде массива (или списка в Python, Haskell или Elixir).
 *
 * Примеры:
 * countBy(1,10) // should return [1,2,3,4,5,6,7,8,9,10]
 * countBy(2,5) // should return [2,4,6,8,10]
 */

namespace MyArray\Cate8\Example;

class Example20
{
    /** @var int */
    private $n;
    /** @var int */
    private $x;
    /** @var array */
    private $z;


    public function __construct($x, $n)
    {
        $this->n = $n;
        $this->x = $x;
        $this->solution2();
    }

    private function solution()
    {
        $i = 0;
        $j = 0;
        $this->z = [];
        while ($i < $this->n) {
            $j++;
            if (($j % $this->x) == 0) {
                $this->z[] = $j;
                $i++;
            }
        }
    }

    private function solution2()
    {
        $this->z = range($this->x, $this->n * $this->x, $this->x);
    }

    public function getZ()
    {
        return $this->z;
    }


}