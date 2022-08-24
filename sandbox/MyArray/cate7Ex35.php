<?php

use MyArray\Cate7\Example\Example35;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Вам будет предоставлен массив объектов (ассоциативные массивы в PHP), представляющих данные о разработчиках,<br>
которые подписались на участие в следующей встрече программистов, которую вы организуете. Список упорядочен в соответствии с тем, кто зарегистрировался первым.<br>
Ваша задача — вернуть одну из следующих строк:<br>
firstName здесь, здесь страна первого зарегистрированного разработчика Python, или же<br>
Не будет разработчиков Python, если ни один разработчик Python не зарегистрируется.<br>
Например, учитывая следующий входной массив:<br>
ваша функция должна возвращать Викторию, Пуэрто-Рико.<br>
Заметки:<br>
Входной массив всегда будет действительным и отформатирован, как в примере выше.<br>
<br>
<a href="https://www.codewars.com/kata/5827bc50f524dd029d0005f2">Задача</a>
</div>';
echo '<br>';
$start = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$a = [
    [
        "first_name" => "Mark",
        "last_name" => "G.",
        "country" => "Scotland",
        "continent" => "Europe",
        "age" => 22,
        "language" => "JavaScript"
    ],
    [
        "first_name" => "Victoria",
        "last_name" => "T.",
        "country" => "Puerto Rico",
        "continent" => "Americas",
        "age" => 30,
        "language" => "Python"
    ],
    [
        "first_name" => "Emma",
        "last_name" => "B.",
        "country" => "Norway",
        "continent" => "Europe",
        "age" => 19,
        "language" => "Python"
    ]
];
myDampPrint($a);
echo '<b>ответ: </b><br>';
myDamp(Example35::getFirstPython($a));
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $start, 4) . ' сек.';
