<?

use MyArray\Cate7\Example\Example69;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
В этом ката вам дается массив для сортировки, но ожидается, что вы начнете сортировку с определенной позиции массива (в порядке возрастания), и,<br>
возможно, вам дается количество элементов для сортировки.<br><br>
Примеры:<br>
sect_sort([1, 2, 5, 7, 4, 6, 3, 9, 8], 2) //=> [1, 2, 3, 4, 5, 6, 7, 8, 9]<br>
sect_sort([9, 7, 4, 2, 5, 3, 1, 8, 6], 2, 5) //=> [9, 7, 1, 2, 3, 4, 5, 8, 6]<br><br>
документация<br>
sect_sort($array, $start, $length);<br>
array - массив для сортировки<br>
start - позиция для начала сортировки<br>
length - количество элементов для сортировки (необязательно)<br>
если аргумент длины не передан или равен нулю, вы сортируете все элементы справа от начальной позиции в массиве<br>
<br>
<a href="https://www.codewars.com/kata/58ef87dc4db9b24c6c000092">Задача</a>
</div>';
echo '<br>';
$startTime = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$array = [9, 7, 1, 2, 3, 4, 5, 8, 6];
$start = 2;
$length = 5;
myDamp($array);
myDamp($start);
myDamp($length);
echo '<b>ответ: </b><br>';
myDamp(Example69::sect_sort($array, $start, $length));
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $startTime, 4) . ' сек.';
