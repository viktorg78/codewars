<?php

/*
 * Напишите функцию, которая принимает список строк в качестве аргумента и возвращает отфильтрованный список,
 * содержащий те же элементы, но с удаленными «гусями».
 * Гуси — это любые строки в следующем массиве, который предварительно заполнен в вашем решении:
 *
 *  ["African", "Roman Tufted", "Toulouse", "Pilgrim", "Steinbacher"] = geese
 *
 * Например, если этот массив был передан в качестве аргумента:
 *
 * ["Mallard", "Hook Bill", "African", "Crested", "Pilgrim", "Toulouse", "Blue Swedish"] - data
 *
 * Ваша функция вернет следующий массив:
 *
 * ["Mallard", "Hook Bill", "Crested", "Blue Swedish"]
 *
 * Элементы в возвращаемом массиве должны быть в том же порядке, что и в исходном массиве, переданном вашей функции,
 * хотя и с удаленными «гусями». Обратите внимание, что все строки будут в том же регистре, что и предоставленные,
 * а некоторые элементы могут повторяться.
 */

namespace MyArray\Cate8\Example;

class Example7
{
    /** @var array */
    private $data;
    /** @var array */
    private $geese;
    /** @var array */
    private $ans;

    public function __construct(array $data, array $geese)
    {
        $this->data = $data;
        $this->geese = $geese;
        $this->solution();
    }

    private function solution()
    {
        $this->ans = array_filter(explode(',',implode(',',array_diff($this->data, $this->geese))));
    }

    public function getAns()
    {
        return $this->ans;
    }

}
