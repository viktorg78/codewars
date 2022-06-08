<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>Вы получаете массив чисел, возвращаете сумму всех положительных.<br>
Упражнение [1,-4,7,12] => 1 + 7 + 12 = 20<br>
 Примечание: если суммировать нечего, сумма по умолчанию равна 0.</div>';

echo '<b>Начало.</b><br>';
$arr = [-1,-4,-7,-12];
$ex = new \MyArray\Cate8\Example\Example8($arr);


echo 'начальный массив';
myDamp($arr);
echo '<b>ответ: </b>';
echo $ex->getAns();


echo '<br><b>Конец.</b>';
