<?php

use MyArray\Cate7\Example\Example5;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Задача<br>
Учитывая массив/список [] целых чисел, Найдите произведение k максимальных чисел.<br><br>
Заметки<br>
Размер массива/списка не менее 3<br>
Числа массива/списка будут представлять собой смесь положительных, отрицательных и нулевых значений<br>
Возможно повторение чисел в массиве/списке.<br>
<br>
<a href="https://www.codewars.com/kata/5a63948acadebff56f000018">Задача</a>
</div>';
echo '<br>';

echo '<b>Начало.</b><br>';
$arr = [10, 2, 3, 8, 1, 10, 4];
$size = 5;
myDampPrint($arr);
echo 'размер:' . $size . '<br>';
echo '<b>ответ: </b><br>';

echo Example5::maxProduct($arr, $size);

echo '<br><b>Конец.</b>';
