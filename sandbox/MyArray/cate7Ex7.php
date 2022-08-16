<?php

use MyArray\Cate7\Example\Example7;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Задача<br>
Учитывая массив/список [] из n целых чисел, найти максимальную сумму троек в массиве без повторений.<br>
Заметки :<br>
Размер массива/списка не менее 3.<br>
Числа массива/списка могут состоять из положительных, отрицательных и нулевых чисел.<br>
Возможно повторение чисел в массиве/списке, т.е. (дублирование не учитывается при суммировании).<br>
<br>
<a href="https://www.codewars.com/kata/5aa1bcda373c2eb596000112">Задача</a>
</div>';
echo '<br>';

echo '<b>Начало.</b><br>';
$arr = [2, 9, 13, 10, 5, 2, 9, 5];
myDampPrint($arr);
echo '<b>ответ: </b><br>';
echo Example7::maxTriSum($arr);
echo '<br><b>Конец.</b>';
