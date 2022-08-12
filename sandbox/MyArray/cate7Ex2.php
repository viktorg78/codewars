<?php

use MyArray\Cate7\Example\Example2;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Цифры в буквы<br>
<br>
Учитывая массив чисел (в строковом формате), вы должны вернуть строку.<br>
Цифры соответствуют буквам алфавита в обратном порядке: a=26, z=1 и т. д.<br>
Также следует учитывать \'!\', \'?\' и \' \', которые представлены как \'27\', \'28\' и \'29\' соответственно.<br>
<a href="https://www.codewars.com/kata/57ebaa8f7b45ef590c00000c">Задача</a>
</div>';
echo '<br>';

echo '<b>Начало.</b><br>';
$ex = new Example2();
echo '<b>ответ: </b><br>';
echo $ex->arrToStr(['24', '12', '23', '22', '4', '26', '9', '8']).'<br>';
echo $ex->arrToStr(['25','7','8','4','14','23','8','25','23','29','16','16','4']).'<br>';
echo $ex->arrToStr(['4', '24']).'<br>';
echo '<br><b>Конец.</b>';