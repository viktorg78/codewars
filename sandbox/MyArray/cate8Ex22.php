<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Завершите функцию, которая принимает два аргумента и возвращает все числа, которые делятся на заданный делитель.<br>
Первый аргумент — это массив чисел, а второй — делитель.<br>
<br>
[1, 2, 3, 4, 5, 6], 2 --> [2, 4, 6]<br>
<br>
</div>';

echo '<b>Начало.</b><br>';
$arr = [0, 1, 2, 3, 4, 5, 6];
$divider = 4;
myDamp($arr);
echo 'Делитель: '.$divider.'<br>';
echo '<b>ответ: </b>';
$ex = new \MyArray\Cate8\Example\Example22($arr,$divider);
myDamp($ex->getAns());
echo '<br><b>Конец.</b>';


