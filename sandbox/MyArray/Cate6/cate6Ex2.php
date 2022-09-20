<?

use MyArray\Cate6\Example\Example2;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Даны два массива строк a1 и a2, которые возвращают отсортированный массив r в лексикографическом порядке строк a1, которые являются подстроками строк a2.<br>
Пример 1:<br>
a1 = ["arp", "live", "strong"]<br>
a2 = ["lively", "alive", "harp", "sharp", "armstrong"]<br>
returns ["arp", "live", "strong"]<br>
Пример 2:<br>
a1 = ["tarp", "mice", "bull"]<br>
a2 = ["lively", "alive", "harp", "sharp", "armstrong"]<br>
возвращает []<br>
Заметки:<br>
Массивы записываются в «общей» нотации. См. «Ваши тестовые примеры» для примеров на вашем языке.<br>
В Shell bash a1 и a2 являются строками. Возврат представляет собой строку, в которой слова разделены запятыми.<br>
Осторожно: в некоторых языках r не должно повторяться.<br>
<br>
<a href="https://www.codewars.com/kata/550554fd08b86f84fe000a58">Задача</a>
</div>';
echo '<br>';
$startTime = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$array1 = ['live', 'strong', 'arp', '1.9'];
$array2 = ['lively', 'alive','harp','sharp','armstrong', '1.9.2.'];
myDamp($array1);
myDamp($array2);
echo '<b>ответ: </b><br>';
myDamp(Example2::inArray($array1, $array2));
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $startTime, 4) . ' сек.';
