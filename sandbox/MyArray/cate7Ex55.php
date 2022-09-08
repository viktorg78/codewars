<?

use MyArray\Cate7\Example\Example55;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
В генетическом алгоритме популяция — это набор кандидатов, которые могут развиваться в направлении лучшего решения.<br>
Мы определяем, насколько хромосома близка к идеальному решению, вычисляя ее пригодность.<br>
Вам даны два параметра, population содержащий всех индивидуумов и функцию fitness это определяет, насколько близка к решению хромосома.<br>
Ваша задача — вернуть коллекцию, содержащую объект с хромосомой и вычисленной приспособленностью.<br>
<br>
<a href="https://www.codewars.com/kata/567b468357ed7411be00004a/train/php">Задача</a>
</div>';
echo '<br>';
$start = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$population =
    [
        '0000',
        '0001',
        '0010',
        '0011',
        '0100',
        '0101',
        '0110',
        '0111',
        '1000',
        '1001',
        '1010',
        '1011',
        '1100',
        '1101',
        '1110',
        '1111'
    ];
myDamp($population);

$fitness = function ($d) {
    return $d === "1";
};
echo '<b>ответ: </b><br>';
myDampPrint(Example55::map_population_fit($population, $fitness));
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $start, 4) . ' сек.';
