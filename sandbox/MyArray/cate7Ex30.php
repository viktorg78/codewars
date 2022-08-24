<?php

use MyArray\Cate7\Example\Example30;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Вам будет предоставлен массив объектов (хэшей в ruby), представляющих данные о разработчиках,<br>
которые подписались на участие в встрече программистов, которую вы организуете впервые.<br>
Ваша задача — вернуть количество разработчиков JavaScript из Европы.<br>
Например, учитывая следующий список:<br>
список переменных1 = [<br>
{ firstName: \'Ной\', lastName: \'M.\', страна: \'Швейцария\', континент: \'Европа\', возраст: 19 лет, язык: \'JavaScript\' },<br>
{ firstName: \'Maia\', lastName: \'S.\', страна: \'Таити\', континент: \'Океания\', возраст: 28, язык: \'JavaScript\' },<br>
{ имя: \'Шуфен\', фамилия: \'Л.\', страна: \'Тайвань\', континент: \'Азия\', возраст: 35, язык: \'HTML\' },<br>
{Имя: \'Сумайя\', фамилия: \'М.\', страна: \'Таджикистан\', континент: \'Азия\', возраст: 30, язык: \'CSS\' }<br>
];<br>
ваша функция должна возвращать номер 1.<br>
Если в Европе нет разработчиков JavaScript, ваша функция должна вернуть 0.<br>
Заметки:<br>
Формат строк всегда будет Европа и JavaScript.<br>
Все данные всегда будут действительными и единообразными, как в примере выше.<br>
<br>
<a href="https://www.codewars.com/kata/582746fa14b3892727000c4f">Задача</a>
</div>';
echo '<br>';
$start = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$a = [
    [
        "first_name" => "Noah",
        "last_name" => "M.",
        "country" => "Switzerland",
        "continent" => "Europe",
        "age" => 19,
        "language" => "JavaScript"
    ],
    [
        "first_name" => "Maia",
        "last_name" => "S.",
        "country" => "Tahiti",
        "continent" => "Oceania",
        "age" => 28,
        "language" => "JavaScript"
    ],
    [
        "first_name" => "Shufen",
        "last_name" => "L.",
        "country" => "Taiwan",
        "continent" => "Asia",
        "age" => 30,
        "language" => "HTML"
    ],
    [
        "first_name" => "Sumayah",
        "last_name" => "M.",
        "country" => "Tajikistan",
        "continent" => "Asia",
        "age" => 30,
        "language" => "CSS"
    ]
];
myDampPrint($a);
echo '<b>ответ: </b><br>';
myDamp(Example30::countDevelopers($a));
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $start, 4) . ' сек.';
