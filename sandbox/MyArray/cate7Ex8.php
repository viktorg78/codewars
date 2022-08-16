<?php

use MyArray\Cate7\Example\Example8;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Определение<br>
Аккуратное число — это число, цифры которого расположены в неубывающем порядке.<br>
Задача<br>
Учитывая номер, найдите, является ли он аккуратным или нет.<br>
<br>
<a href="https://www.codewars.com/kata/5a87449ab1710171300000fd">Задача</a>
</div>';
echo '<br>';

echo '<b>Начало.</b><br>';
$n = 104;
echo 'число:' . $n . '<br>';
echo '<b>ответ: </b><br>';
echo Example8::tidyNumber($n) ? 'красивое число' : 'не красивое число';
echo '<br><b>Конец.</b>';
