<?php
/*
 * Дан массив целых чисел.
 * Возвращает массив, где первый элемент — это количество положительных чисел, а второй элемент — сумма отрицательных чисел. 0 не является ни положительным, ни отрицательным.
 * Если вход представляет собой пустой массив или имеет значение null, верните пустой массив.
 *
 * For input [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15], you should return [10, -65].
 */

namespace MyArray\Cate8\Example;

class Example3
{
    /** @var array */
    private $data;
    /** @var int */
    private $positiveNumber = 0;
    /** @var int */
    private $negativeNumber = 0;
    /** @var array */
    private $solution;

    public function __construct($data)
    {
        $this->data = $data;
        if (empty($this->data))
            $this->solution = [];
        else {
            $this->calculate();
            $this->solution = [$this->positiveNumber, $this->negativeNumber];
        }
    }

    private function calculate()
    {
        foreach ($this->data as $value) {
            if ($value < 0) $this->negativeNumber += $value;
            if ($value > 0) $this->positiveNumber++;
        }
    }

    public function getSolution()
    {
        return $this->solution;
    }


}