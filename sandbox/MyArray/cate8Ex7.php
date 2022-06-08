<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>Напишите функцию, которая принимает список строк в качестве аргумента и возвращает отфильтрованный список,<br>
 содержащий те же элементы, но с удаленными «гусями».<br>
 Гуси — это любые строки в следующем массиве, который предварительно заполнен в вашем решении:<br>
 <br>
 ["African", "Roman Tufted", "Toulouse", "Pilgrim", "Steinbacher"]<br>
 <br>
 Например, если этот массив был передан в качестве аргумента:<br> 
 ["Mallard", "Hook Bill", "African", "Crested", "Pilgrim", "Toulouse", "Blue Swedish"]<br>
 <br>
 Ваша функция вернет следующий массив:<br>
["Mallard", "Hook Bill", "Crested", "Blue Swedish"]<br>
 <br>
 Элементы в возвращаемом массиве должны быть в том же порядке, что и в исходном массиве, переданном вашей функции,<br>
хотя и с удаленными «гусями». Обратите внимание, что все строки будут в том же регистре, что и предоставленные,<br>
а некоторые элементы могут повторяться.</div>';

echo '<b>Начало.</b><br>';

$geese = ["African", "Roman Tufted", "Toulouse", "Pilgrim", "Steinbacher"];
$data = ["Mallard", "Hook Bill", "African", "Crested", "Pilgrim", "Toulouse", "Blue Swedish"];

$ex = new \MyArray\Cate8\Example\Example7($data, $geese);

echo 'начальный массив';
myDamp($data);

echo '<b>ответ: </b>';
myDamp($ex->getAns());


echo '<br><b>Конец.</b>';