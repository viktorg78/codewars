<?php

use MyArray\Cate7\Example\Example45;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Задача<br>
Ваша задача состоит в том, чтобы проверить, что предоставленный массив содержит все остановки, упомянутые Аланом.<br>
Список остановок следующий:<br>
Rejection<br>
Disappointment<br>
Backstabbing Central<br>
Shattered Dreams Parkway<br>
Если все остановки появляются в заданном массиве, верните  Smell my cheese you mother!<br>
если нет, верни No, seriously, run. You will miss it.<br>
<br>
<a href="https://www.codewars.com/kata/580a41b6d6df740d6100030c">Задача</a>
</div>';
echo '<br>';
$start = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$a =
    [
        'Rejection',
        'Shattered Dreams Parkway',
        'Disappointment',
        'Backstabbing Central',
        'Disappointment',
        'Shattered Dreams Parkway',
        'North Norfolk Digital',
        'Norwich'
    ];
myDamp($a);
echo '<b>ответ: </b><br>';
myDamp(Example45::alan($a));
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $start, 4) . ' сек.';
