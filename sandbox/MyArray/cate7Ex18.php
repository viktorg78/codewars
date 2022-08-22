<?php

use MyArray\Cate7\Example\Example18;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Задача<br>
Дан массив целых чисел. Найдите максимальное произведение, полученное при умножении двух соседних чисел в массиве.<br>
Заметки<br>
Размер массива/списка не менее 2.<br>
Числа массива/списка могут быть как положительными, так и отрицательными, а также нулями.<br>
<br>
<a href="https://www.codewars.com/kata/5a4138acf28b82aa43000117">Задача</a>
</div>';
echo '<br>';
$start = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$array = [-23, 4, -5, 99, -27, 329, -2, 7, -921];
myDamp($array);

echo '<b>ответ: </b><br>';
myDamp(Example18::adjacentElementsProduct($array));
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $start, 4) . ' сек.';



