<?

use MyArray\Cate7\Example\Example58;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
У вас есть два массива в этом ката, каждый массив содержит только уникальные элементы.<br>
Ваша задача состоит в том, чтобы вычислить количество элементов в первом массиве, которые также находятся во втором массиве.<br>
<br>
<a href="https://www.codewars.com/kata/561046a9f629a8aac000001d">Задача</a>
</div>';
echo '<br>';
$start = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$a = ['Perl', 'Clojure', 'JavaScript'];
$b = ['Go', 'C++', 'Erlang'];
myDamp($a);
myDamp($b);
echo '<b>ответ: </b><br>';
myDamp(Example58::matchArrays($a, $b));
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $start, 4) . ' сек.';
