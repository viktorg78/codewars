<?php

use MyArray\Cate7\Example\Example17;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Задача<br>
Даны делитель и граница. Найдите наибольшее целое число N, такое, что<br>
Условия :<br>
N делится на делитель<br>
N меньше или равно границе<br>
N больше 0.<br>
Заметки<br>
Параметры (делитель, граница), передаваемые в функцию, являются только положительными значениями.<br>
Гарантируется, что делитель найден.<br>
<br>
<a href="https://www.codewars.com/kata/5aba780a6a176b029800041c">Задача</a>
</div>';
echo '<br>';
$start = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$divisor = 37;
$bound = 200;
echo 'делитель:';
myDamp($divisor);
echo 'граница:';
myDamp($bound);
echo '<br>';
echo '<b>ответ: </b><br>';
myDamp(Example17::maxMultiple($divisor, $bound));
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $start, 4) . ' сек.';


