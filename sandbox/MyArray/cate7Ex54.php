<?

use MyArray\Cate7\Example\Example54;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Реализуйте функцию, которая отфильтровывает значения массива, удовлетворяющие заданному предикату.<br>
reject([1, 2, 3, 4, 5, 6], function ($n) {return $n % 2 == 0;})  =>  [1, 3, 5]<br>
<br>
<a href="https://www.codewars.com/kata/52988f3f7edba9839c00037d">Задача</a>
</div>';
echo '<br>';
$start = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$array = [1, 2, 3, 4, 5, 6];
$predicate = function ($n) {
    return $n % 2 == 0;
};
myDamp($array);
echo '<b>ответ: </b><br>';
myDamp(Example54::reject($array, $predicate));
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $start, 4) . ' сек.';

