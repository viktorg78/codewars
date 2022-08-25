<?php

use MyArray\Cate7\Example\Example36;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Вам будет предоставлен массив объектов (ассоциативные массивы в PHP), представляющих данные о разработчиках,<br>
которые подписались на участие в следующей встрече программистов, которую вы организуете.<br>
Ваша задача вернуть:<br>
true, если хотя бы один разработчик Ruby зарегистрировался, или же false, если не будет разработчиков Ruby.<br>
<br>
Заметки:<br>
Входной массив всегда будет действительным и отформатирован.<br>
<br>
<a href="https://www.codewars.com/kata/5827acd5f524dd029d0005a4">Задача</a>
</div>';
echo '<br>';
$start = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$a = [
    [
        "first_name" => "Emma",
        "last_name" => "Z.",
        "country" => "Netherlands",
        "continent" => "Europe",
        "age" => 29,
        "language" => "Ruby1"
    ],
    [
        "first_name" => "Piotr",
        "last_name" => "B.",
        "country" => "Poland",
        "continent" => "Europe",
        "age" => 128,
        "language" => "JavaScript"
    ],
    [
        "first_name" => "Jayden",
        "last_name" => "P.",
        "country" => "Jamaica",
        "continent" => "Americas",
        "age" => 42,
        "language" => "JavaScript"
    ]
];
myDampPrint($a);
echo '<b>ответ: </b><br>';
echo Example36::isRubyComing($a) ? 'true' : 'false';
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $start, 4) . ' сек.';
