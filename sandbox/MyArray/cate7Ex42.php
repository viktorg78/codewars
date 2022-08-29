<?php

use MyArray\Cate7\Example\Example42;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
О, нет!<br>
Какой-то действительно забавный веб-разработчик дал вам последовательность чисел из своего ответа API в виде последовательности строк!<br>
Вам нужно привести весь массив к правильному типу.<br>
Создайте функцию, которая принимает в качестве параметра последовательность чисел, представленную в виде строк, и выводит последовательность чисел.<br>
то есть: [\'1\', \'2\', \'3\'] до [1, 2, 3]<br>
Обратите внимание, что вы также можете получать поплавки.<br>
<br>
<a href="https://www.codewars.com/kata/5783d8f3202c0e486c001d23">Задача</a>
</div>';
echo '<br>';
$start = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$stringArray = ["1.1", "2.2", "3.3"];
myDamp($stringArray);
echo '<b>ответ: </b><br>';
myDamp(Example42::toNumberArray($stringArray));
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $start, 4) . ' сек.';
