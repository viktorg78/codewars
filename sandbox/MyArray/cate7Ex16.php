<?php

use Loger\CreateLogFile;
use MyArray\Cate7\Example\Example16;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Счета ассоциации «Fat to Fit Club (FFC)» контролируются Джоном в качестве бухгалтера-добровольца.<br>
Ассоциация финансируется за счет финансовых пожертвований от щедрых благотворителей.<br>
У Джона есть список первых n пожертвований: [14, 30, 5, 7, 9, 11, 15]<br>
Он хочет знать, сколько следующий благотворитель должен пожертвовать ассоциации, чтобы среднее из первых n + 1 пожертвований должно достичь в среднем 30.<br>
После подсчетов он нашел 149. Он думает, что мог ошибиться.<br>
если dons = [14, 30, 5, 7, 9, 11, 15], то new_avg(dons, 30) -- 149<br>
<br>
<a href="https://www.codewars.com/kata/569b5cec755dd3534d00000f">Задача</a>
</div>';
echo '<br>';
$start = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';

$arr = [5, 2, 3];
$newavg = 6;

myDamp($arr);
myDamp($newavg);

echo '<b>ответ: </b><br>';
try {
    myDamp(Example16::newAvg($arr, $newavg));
} catch (Exception $e) {
    echo $e->getMessage();
}
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $start, 4) . ' сек.';

