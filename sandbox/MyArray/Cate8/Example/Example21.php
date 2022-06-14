<?php

/*
 * Нам нужен массив, но не какой-нибудь старый массив, а массив с содержимым!
 * Напишите функцию, которая создает массив с числами от 0 до N-1 в нем.
 * Например, следующий код создаст массив, содержащий числа от 0 до 4:
 * arr(5) // => [0,1,2,3,4]
 * Примечание. Этот параметр является необязательным. Таким образом, вы должны дать ему значение по умолчанию.
 */

namespace MyArray\Cate8\Example;

class Example21
{
    /** @var int */
    private $data;
    /** @var array */
    private $ans;

    public function __construct($data = 0)
    {
        $this->data = $data;
        $this->solution();
    }

    private function solution()
    {
        ($this->data == 0) ? $this->ans = [] : $this->ans = range(0, $this->data-1);
    }

    public function getAns()
    {
        return $this->ans;
    }
}
