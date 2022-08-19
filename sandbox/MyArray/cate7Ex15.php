<?php

use MyArray\Cate7\Example\Example15;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Получив строку, превратите каждый символ в его код символа ASCII и соедините их вместе, чтобы создать число — назовем это число total1:<br>
\'ABC\' --> \'A\' = 65, \'B\' = 66, \'C\' = 67 --> 656667<br>
Затем замените любое вхождение числа 7 на число 1 и назовите это число total2:<br>
total1 = 656667<br>
total2 = 656661<br>
Затем верните разницу между суммой цифр в total1 и total2:<br>
<br>
<a href="https://www.codewars.com/kata/57f75cc397d62fc93d000059">Задача</a>
</div>';
echo '<br>';

echo '<b>Начало.</b><br>';
$str = "ABC";
$str1 = "abcdef"; // ответ 6
$str2 = 'MM'; //ответ 24
myDamp($str1);
echo 'ответ не сходится!!!';
echo '<b>ответ: </b><br>';
myDamp(Example15::calc($str1));
echo '<br><b>Конец.</b>';
