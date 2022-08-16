<?php

use MyArray\Cate7\Example\Example11;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Измените функцию spacify, чтобы она возвращала заданную строку с пробелами, вставленными между каждым символом.<br>
Пример:<br>
spacify("hello world") // "h e l l o   w o r l d"<br>
<br>
<a href="https://www.codewars.com/kata/557af4c6169ac832300000ba">Задача</a>
</div>';
echo '<br>';

echo '<b>Начало.</b><br>';
$s = "hello world";
myDamp($s);
echo '<b>ответ: </b><br>';
myDamp(Example11::spacify($s));
echo '<br><b>Конец.</b>';