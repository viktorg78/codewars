<?php

use MyArray\Cate7\Example\Example34;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Вам будет предоставлен массив объектов (ассоциативные массивы в PHP, таблицы в COBOL), представляющие данные о разработчиках,<br>
которые подписались на участие в следующей встрече программистов, которую вы организуете.<br>
Ваша задача вернуть либо:<br>
Значение true, если все разработчики в списке используют один и тот же язык, или же ложно в противном случае.<br>
<br>
<a href="https://www.codewars.com/kata/58287977ef8d4451f90001a0">Задача</a>
</div>';
echo '<br>';
$start = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$a = [
    [
        "first_name" => "Daniel",
        "last_name" => "J.",
        "country" => "Aruba",
        "continent" => "Americas",
        "age" => 42,
        "language" => "JavaScript"
    ],
    [
        "first_name" => "Kseniya",
        "last_name" => "T.",
        "country" => "Belarus",
        "continent" => "Europe",
        "age" => 22,
        "language" => "JavaScript"
    ],
    [
        "first_name" => "Hanna",
        "last_name" => "L.",
        "country" => "Hungary",
        "continent" => "Europe",
        "age" => 65,
        "language" => "JavaScript"
    ]
];
myDampPrint($a);
echo '<b>ответ: </b><br>';
echo Example34::isSameLanguage($a) ? 'true' : 'false';
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $start, 4) . ' сек.';
