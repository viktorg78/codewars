<?

use MyArray\Cate7\Example\Example67;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Сегодня пятница, 13-е, и Джейсон готов к своей первой серии убийств!<br>
Создайте функцию killcount, которая принимает два аргумента: массив пар массивов (имя советника и интеллект — [\'Чад\', 2]) и целое число, представляющее интеллект Джейсона.<br>
<br>
$counselors = [["Chad", 2], ["Tommy", 9]];<br>
$jason = 7;<br>
<br>
Ваша функция должна возвращать массив имен всех вожатых, которых Джейсон может перехитрить и убить.<br>
<a href="https://www.codewars.com/kata/5925acf31a9825d616000e74">Задача</a>
</div>';
echo '<br>';
$start = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$counselors =
    [
        ['Tiffany', 4],
        ['Jack', 6],
        ['Megan', 7],
        ['Tyler', 3]
    ];
$jason = 6;
myDampPrint($counselors);
myDamp($jason);
echo '<b>ответ: </b><br>';
myDamp(Example67::killcount($counselors, $jason));
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $start, 4) . ' сек.';
