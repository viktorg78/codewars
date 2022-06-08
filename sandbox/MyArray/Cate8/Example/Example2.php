<?php
/*
 * Просто удалите пробелы из строки, затем верните результирующую строку.
 */

namespace MyArray\Cate8\Example;

class Example2
{
    /** @var string */
    private $data;
    /** @var array */
    private $dataArray;
    /** @var string */
    private $dataString;

    public function __construct(string $data)
    {
        $this->data = $data;
        $this->solutionArr();
        $this->solutionStr();
    }

    private function solutionArr()
    {
        $this->dataArray = preg_split('/[\s,]+/', $this->data);
    }

    private function solutionStr()
    {
        $this->dataString = implode('', $this->dataArray);
    }

    public function getDataString()
    {
        return $this->dataString;
    }

}