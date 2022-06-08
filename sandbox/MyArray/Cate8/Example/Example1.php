<?php

/*
Напишите метод, который будет получать массив целых чисел в качестве параметра и будет обрабатывать каждое число из этого массива.
Вернуть новый массив с обработкой каждого числа входного массива следующим образом:
Если число имеет целый квадратный корень, возьмите его, иначе возведите число в квадрат.

[4,3,9,7,2,1] -> [2,9,3,49,4,1]
*/

namespace MyArray\Cate8\Example;

class Example1
{
    /** @var array */
    private $data;
    /** @var array */
    private $solution;

    public function __construct(array $data)
    {
        $this->data = $data;
        echo 'Входящий массив';
        myDamp($this->data);
        $this->arraySolutions();
    }

    private function arraySolutions()
    {
        echo 'Исходящий массив';
        $this->solution = array_map(function ($data) {
            $dataSqrt = sqrt($data);

            if (($dataSqrt - floor($dataSqrt)) == 0) {
                return $dataSqrt;
            } else {
                return $data * $data;
            }
        }, $this->data);
    }

    public function getSolution()
    {
        return $this->solution;
    }
}
