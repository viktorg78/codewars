<?php

use MyArray\Cate7\Example\Example6;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Учитывая строку слов (x), вам нужно вернуть массив слов, отсортированных в алфавитном порядке по последнему символу в каждом.<br>
Если два слова имеют одинаковую последнюю букву, возвращаемый ими массив должен отображать их в том порядке, в котором они появились в данной строке.<br>
Все входы будут действительными.<br>
<br>
<a href="https://www.codewars.com/kata/57eba158e8ca2c8aba0002a0">Задача</a>
</div>';
echo '<br>';

echo '<b>Начало.</b><br>';
$str = 'what time are we climbing up the volcano';
echo $str . '<br>';
echo 'time are we the climbing volcano up what' . '<br>';
echo '<b>ответ: </b><br>';
myDampPrint(Example6::last($str));

myDampPrint(Example6::lastAlternative($str));
echo '<br><b>Конец.</b>';
