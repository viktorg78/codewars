<?php

use MyArray\Cate7\Example\Example21;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Вам будет предоставлен массив объектов (ассоциативные массивы в PHP, таблицы в COBOL),<br>
представляющие данные о разработчиках, которые подписались на участие в следующей встрече программистов, которую вы организуете.<br>
Ваша задача — вернуть массив, в котором каждый объект будет иметь новое свойство «приветствие» со следующим строковым значением:<br>
Привет firstName здесь , что вам больше всего нравится в языке здесь ?<br>
<br>
<a href="https://www.codewars.com/kata/58279e13c983ca4a2a00002a">Задача</a>
</div>';
echo '<br>';
$start = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$a = [
    [
        "first_name" => "Sofia",
        "last_name" => "I.",
        "country" => "Argentina",
        "continent" => "Americas",
        "age" => 35,
        "language" => "Java"
    ],
    [
        "first_name" => "Lukas",
        "last_name" => "X.",
        "country" => "Croatia",
        "continent" => "Europe",
        "age" => 35,
        "language" => "Python"
    ],
    [
        "first_name" => "Madison",
        "last_name" => "U.",
        "country" => "United States",
        "continent" => "Americas",
        "age" => 32,
        "language" => "Ruby"
    ]
];
myDampPrint($a);
echo '<b>ответ: </b><br>';
myDampPrint(Example21::greet_developers($a));
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $start, 4) . ' сек.';

