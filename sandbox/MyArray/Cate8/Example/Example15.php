<?php

/*
 * Вам будет дан массив a и значение x. Все, что вам нужно сделать, это проверить, содержит ли предоставленный массив значение.
 * Массив может содержать числа или строки. Х может быть любым.
 * Возвращает true, если массив содержит значение, и false, если нет.
 */

namespace MyArray\Cate8\Example;

class Example15
{
    /** @var array */
    private $data;
    /** @var mixed */
    private $needle;
    /** @var bool */
    private $ans;

    public function __construct(array $data, $needle)
    {
        $this->data = $data;
        $this->needle = $needle;
        $this->solution();
    }

    private function solution()
    {
        $this->ans = in_array($this->needle, $this->data);
    }

    public function getAns()
    {
        return $this->ans;
    }
}
