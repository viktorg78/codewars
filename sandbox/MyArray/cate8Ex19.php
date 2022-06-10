<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Учитывая массив целых чисел в виде строк и чисел, верните сумму значений массива, как если бы все они были числами.<br>
Верните ответ в виде числа.
<br>
</div>';

echo '<b>Начало.</b><br>';
$arr = [9, 3, '7', '3'];
myDamp($arr);
echo '<b>ответ: </b>';
$ex = new \MyArray\Cate8\Example\Example19($arr);
echo $ex->getAns();
echo '<br><b>Конец.</b>';
