<?

use MyArray\Cate7\Example\Example62;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Определите, является ли покерная рука флешем, то есть являются ли пять карт одной масти.<br>
Вашей функции будет передан список/массив из 5 строк, каждая из которых представляет покерную карту в формате «5H» (пятерка червей),<br>
что означает значение карты, за которым следует начальная буква ее масти (червы, пики, бубны или клубы). Джокеры не включены.<br>
Ваша функция должна возвращать true, если рука представляет собой флеш, и false в противном случае.<br>
Возможные значения карт: 2, 3, 4, 5, 6, 7, 8, 9, 10, J, Q, K, A.<br>
Примеры<br>
[\'AS\', \'3S\', \'9S\', \'KS\', \'4S\'] == истина<br>
[\'AD\', \'4S\', \'7H\', \'KS\', \'10S\'] == ложь<br>
<br>
<a href="https://www.codewars.com/kata/5acbc3b3481ebb23a400007d">Задача</a>
</div>';
echo '<br>';
$start = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$cards = ["AS", "3S", "9S", "KS", "4S"];
myDamp($cards);
echo '<b>ответ: </b><br>';
myDamp(Example62::checkIfFlush($cards));
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $start, 4) . ' сек.';
