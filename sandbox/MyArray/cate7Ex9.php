<?php

use MyArray\Cate7\Example\Example9;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Вызов:<br>
Учитывая двумерный массив целых чисел, вернуть сглаженную версию массива со всеми целыми числами в отсортированном (по возрастанию) порядке.<br>
Пример:<br>
Учитывая [[3, 2, 1], [4, 6, 5], [], [9, 7, 8]], ваша функция должна возвращать [1, 2, 3, 4, 5, 6, 7, 8 , 9].<br>
<br>
<a href="https://www.codewars.com/kata/57ee99a16c8df7b02d00045f">Задача</a>
</div>';
echo '<br>';

echo '<b>Начало.</b><br>';
$array = [[3, 2, 1], [4, 6, 5], [], [9, 7, 8]];
myDampPrint($array);
echo '<b>ответ: </b><br>';
myDampPrint(Example9::flatten_and_sort($array));
echo '<br><b>Конец.</b>';

