<?php

use MyArray\Cate7\Example\Example29;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Ваша задача — определить, сколько файлов из очереди копирования вы сможете сохранить на свой жесткий диск.<br>
Файлы должны быть сохранены в том порядке, в котором они появляются в очереди.<br>
Вход:<br>
Массив размеров файлов (0 <= s <= 100)<br>
Емкость HD (0 <= c <= 500)<br>
Выход:<br>
Количество файлов, которые можно полностью сохранить на HD.<br>
save([4,4,4,3,3], 12) -> 3<br>
# 4+4+4 <= 12, but 4+4+4+3 > 12<br>
save([4,4,4,3,3], 11) -> 2<br>
# 4+4 <= 11, but 4+4+4 > 11<br>
<br>
<a href="https://www.codewars.com/kata/5d49c93d089c6e000ff8428c">Задача</a>
</div>';
echo '<br>';
$start = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$sizes = [4,4,4,3,3];
$hd = 12;
myDamp($sizes);
myDamp($hd);
echo '<b>ответ: </b><br>';
myDamp(Example29::save($sizes, $hd));
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $start, 4) . ' сек.';

