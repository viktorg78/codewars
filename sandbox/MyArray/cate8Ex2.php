<?php

use MyArray\Cate8\Example\Example2;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');
echo '<div>Просто удалите пробелы из строки, затем верните результирующую строку.</div>';

echo '<b>Начало.</b><br>';
$str = '8 j 8   mBliB8g  imjB8B8  jl  B';
echo 'начальная строка: '.$str.'<br>';
$ex = new Example2($str);
echo 'результат: '.$ex->getDataString();

echo '<br><b>Конец.</b>';
