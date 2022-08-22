<?php

use MyArray\Cate7\Example\Example22;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Задача<br>
Учитывая массив целых чисел, Найдите минимальную сумму, которая получается в результате суммирования каждого произведения двух целых чисел.<br>
Заметки<br>
Массив/список будет содержать только положительные значения.<br>
Массив/список всегда будет иметь четный размер<br>
minSum({5,4,2,3}) ==> return (22)<br>
<br>
<a href="https://www.codewars.com/kata/5a523566b3bfa84c2e00010b">Задача</a>
</div>';
echo '<br>';
$start = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$arr = [5, 1, 9, 3, 7, 7, 2, 10];
myDamp($arr);
echo '<b>ответ: </b><br>';
myDamp(Example22::minSum($arr));
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $start, 4) . ' сек.';
