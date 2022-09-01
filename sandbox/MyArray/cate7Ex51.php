<?php

use MyArray\Cate7\Example\Example51;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Запрограммируйте функцию sumAverage(arr), где arr — массив, содержащий массивы, заполненные числами, например:<br>
sumAverage([[1, 2, 2, 1], [2, 2, 2, 1]]);<br>
Сначала определите среднее значение каждого массива. Затем верните сумму всех средних значений.<br>
Все числа будут меньше 100 и больше -100.<br>
arr будет содержать максимум 50 массивов.<br>
После расчета всех средних значений сложите их все вместе, а затем округлите в меньшую сторону, как показано в примере ниже:<br>
Приведенный пример: sumAverage([[3, 4, 1, 3, 5, 1, 4], [21, 54, 33, 21, 77]]), ответ 44.<br><br>
1. Вычислите среднее значение каждого отдельного массива:<br>
[3, 4, 1, 3, 5, 1, 4] = (3 + 4 + 1 + 3 + 5 + 1 + 4) / 7 = 3<br>
[21, 54, 33, 21, 77] = (21 + 54 + 33 + 21 + 77) / 5 = 41,2<br><br>
2. Сложите среднее значение каждого массива вместе:<br>
3 + 41,2 = 44,2<br><br>
3. Округлите итоговое среднее значение в меньшую сторону:<br>
floor(44.2) = 44<br><br>
import math<br>
math.floor(44.2) = 44<br>
<br>
<a href="https://www.codewars.com/kata/56d5166ec87df55dbe000063">Задача</a>
</div>';
echo '<br>';
$start = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$arr = [[3, 4, 1, 3, 5, 1, 4], [21, 54, 33, 21, 77]];
myDampPrint($arr);
echo '<b>ответ: </b><br>';
myDamp(Example51::sumAverage($arr));
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $start, 4) . ' сек.';