<?

use MyArray\Cate6\Example\Example11;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');
?>
<!--<p style="color: red">Не решено!!!</p>-->
<p style="color: green; background-color: #D8E8F4; padding: 10px; border-radius: 10px;">Решено!!!</p>
<div>
    Вам дан массив. Завершите функцию, которая возвращает количество ВСЕХ элементов в массиве, включая любые вложенные
    массивы.<br/>
    Вход всегда будет массивом.<br/><br/>
    В PHP вы не можете предполагать, что передаваемый массив будет неассоциативным.<br/>

    Обратите внимание, что count(), eval() и COUNT_RECURSIVE запрещены - вы должны быть в состоянии реализовать логику
    для deep_c() самостоятельно ;)
    <div style="background-color: #999999; padding: 5px; border-radius: 10px; margin-top: 10px">
        <b>Example</b>
        <ul>
            <li><code>[] --> 0</code></li>
            <li><code>[1, 2, 3] --> 3</code></li>
            <li><code>["x", "y", ["z"]] --> 4</code></li>
            <li><code>[1, 2, [3, 4, [5]]] --> 7</code></li>
            <li><code>[[[[[[[[[]]]]]]]]] --> 8</code></li>
        </ul>
    </div>
    <br><br>
    <a href="https://www.codewars.com/kata/596f72bbe7cd7296d1000029">ЗАДАЧА</a><br><br>
</div>
<br>
<?
$startTime = microtime(true);// засекли время на выполнене скрипта
?>
<b>Начало.</b><br>
<?
$arr = [];
$arr = [1, 2, 3];
$arr = [["z"], "x", "y"];
$arr = [1, 2, [3, 4, [5]]];
//$arr = [[[[[[[[[]]]]]]]]];

myDampPrint($arr);
?>
<br>
<b>ответ: </b><br>
<?

myDamp(Example11::deep_c($arr));

?>
<br>
<br><b>Конец.</b><br>
Время выполнения скрипта: <?= round(microtime(true) - $startTime, 4) ?> сек.
<br/><br/>
<a href="http://test.loc/sandbox/sandbox.php">Назад.</a>
