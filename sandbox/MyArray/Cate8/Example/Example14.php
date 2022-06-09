<?php

/*
 * Учитывая массив чисел, проверьте, являются ли какие-либо числа кодами символов для строчных гласных (a, e, i, o, u).
 * Если это так, измените значение массива на строку этой гласной.
 * Вернуть полученный массив.
 */

namespace MyArray\Cate8\Example;

class Example14
{
    /** @var array */
    private $data;
    /** @var array */
    private $ans;

    /**
     * @param array $data входящий массив
     */
    public function __construct(array $data)
    {
        $this->data = $data;
        $this->solution3();
    }

    private function solution()
    {
        $this->ans = array_map(function ($n) {
            switch ($n) {
                case ord('e'):
                    return 'e';
                case ord('i'):
                    return 'i';
                case ord('o'):
                    return 'o';
                case ord('u'):
                    return 'u';
                case ord('a'):
                    return 'a';
                default:
                    return $n;
            }
        }, $this->data);
    }

    private function solution2()
    {
        $arr = str_split('eioua');
        $this->ans = array_map(function ($n) use ($arr) {
            $char = chr($n);
            return in_array($char, $arr) ? $char : $n;
        }, $this->data);
    }

    private function solution3()
    {
        $this->ans = str_replace(['97', '101', '105', '111', '117'], ['a', 'e', 'i', 'o', 'u'], $this->data);
    }

    public function getAns()
    {
        return $this->ans;
    }
}
