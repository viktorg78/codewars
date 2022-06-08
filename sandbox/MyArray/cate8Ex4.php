<?php

use MyArray\Cate8\Example\Example4;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>Возьмите массив и удалите каждый второй элемент из массива. Всегда сохраняйте первый элемент и начинайте удаление со следующего элемента.<br>
 задание:<br>
 ["Keep", "Remove", "Keep", "Remove", "Keep", ...] --> ["Keep", "Keep", "Keep", ...]<br>
 Ни один из массивов не будет пустым, так что вам не о чем беспокоиться!</div>';

echo '<b>Начало.</b><br>';

$arr = ['Keep1', 'Remove2', 'Keep3', 'Remove4', 'Keep5'];
echo 'Исходный массив';
myDamp($arr);

$ex = new Example4($arr);

echo 'исходящий массив';
myDamp($ex->getAnswer());

echo '<br><b>Конец.</b>';