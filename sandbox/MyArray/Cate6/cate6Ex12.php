<?

use MyArray\Cate6\Example\Example12;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');
?>
<!--<p style="color: red">Не решено!!!</p>-->
<p style="color: green; background-color: #D8E8F4; padding: 10px; border-radius: 10px;">Решено!!!</p>
<div>
    <b>Пара перчаток</b><br/>
    Приближается зима, вы должны подготовить свои лыжные каникулы. Цель этого ката — определить количество пар перчаток,
    которое вы можете составить из перчаток, которые есть в вашем ящике.<br/><br/>
    Учитывая массив, описывающий цвет каждой перчатки, верните количество пар, которые вы можете составить, предполагая,
    что только перчатки одного цвета могут образовывать пары.<br/>
    <div style="background-color: #999999; padding: 5px; border-radius: 10px; margin-top: 10px">
        <b>Example</b>
        <ul>
            <li><code>input = ["red", "green", "red", "blue", "blue"]</code></li>
            <li><code>result = 2 (1 red pair + 1 blue pair)</code></li>
            </br>
            <li><code>input = ["red", "red", "red", "red", "red", "red"]</code></li>
            <li><code>result = 3 (3 red pairs)</code></li>
        </ul>
    </div>
    <br><br>
    <a href="https://www.codewars.com/kata/58235a167a8cb37e1a0000db/train/php">ЗАДАЧА</a><br><br>
</div>
<br>
<?
$startTime = microtime(true);// засекли время на выполнене скрипта
?>
<b>Начало.</b><br>
<?
$arr = ["red", "green", "red", "blue", "blue"];
//$arr = ["red", "red", "red", "red", "red", "red"];

myDampPrint($arr);
?>
<br>
<b>ответ: </b><br>
<?

myDamp(Example12::numberOfPairs($arr));

?>
<br>
<br><b>Конец.</b><br>
Время выполнения скрипта: <?= round(microtime(true) - $startTime, 4) ?> сек.
<br/><br/>
<a href="http://test.loc/sandbox/sandbox.php">Назад.</a>
