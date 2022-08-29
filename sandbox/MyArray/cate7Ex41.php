<?php

use MyArray\Cate7\Example\Example41;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Имея массив целых чисел (x) и цель (t), вы должны выяснить, являются ли суммы любых двух последовательных чисел в массиве равными t.<br>
Если да, то удалите второй номер.<br>
Пример:<br>
х = [1, 2, 3, 4, 5]<br>
т = 3<br>
1+2 = t, поэтому удалите 2. Нет других пар = t, поэтому остальная часть массива остается:<br>
[1, 3, 4, 5]<br>
Работайте с массивом слева направо.<br>
Вернуть полученный массив.<br>
<br>
<a href="https://www.codewars.com/kata/57f7796697d62fc93d0001b8">Задача</a>
</div>';
echo '<br>';
$start = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$x = [2, 6, 2];
$t = 8;
myDamp($x);
myDamp($t);
echo '<b>ответ: </b><br>';
myDamp(Example41::trouble($x, $t));
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $start, 4) . ' сек.';

