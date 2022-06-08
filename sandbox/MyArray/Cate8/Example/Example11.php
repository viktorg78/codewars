<?php

/*
 * Учитывая строку цифр, вы должны заменить любую цифру ниже 5 на «0», а любую цифру 5 и выше на «1». Верните полученную строку.
 * Примечание: ввод никогда не будет пустой строкой
 */

namespace MyArray\Cate8\Example;

class Example11
{
    /** @var string */
    private $data;
    /** @var string */
    private $ans;

    public function __construct(string $data)
    {
        $this->data = $data;
        $this->solution();
    }

    private function solution()
    {
        $arr = array_map(
            function ($n) {
                return ($n < 5) ? 0 : 1;
            }, str_split($this->data, 1)
        );

        $this->ans = implode('', $arr);
    }

    public function getAns()
    {
        return $this->ans;
    }
}
