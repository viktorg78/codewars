<?php

use MyArray\Cate7\Example\Example19;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Массив Nice определяется как массив, в котором для каждого значения n в массиве также есть элемент n - 1 или n + 1 в массиве.<br>
Примеры:<br>
[2, 10, 9, 3] is a nice array because<br>
 2 =  3 - 1<br>
10 =  9 + 1<br>
 3 =  2 + 1<br>
 9 = 10 - 1<br>
<br>
<a href="https://www.codewars.com/kata/59b844528bcb7735560000a0">Задача</a>
</div>';
echo '<br>';
$start = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$arr = [0, 1, 2, 3];
myDamp($arr);
echo '<b>ответ: </b><br>';
myDamp(Example19::isNice($arr));
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $start, 4) . ' сек.';
