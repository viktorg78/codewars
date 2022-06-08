<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>Учитывая массив целых чисел, вернуть новый массив с удвоением каждого значения.<br>
пример<br>
[1, 2, 3] --> [2, 4, 6]</div>';

echo '<b>Начало.</b><br>';
$arr = [1, 2, 3];

echo 'начальный массив';
myDamp($arr);
$ex = new \MyArray\Cate8\Example\Example5($arr);
echo '<b>ответ</b>';
myDamp($ex->getAns());

echo '<br><b>Конец.</b>';
