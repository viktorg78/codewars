<?

use MyArray\Cate6\Example\Example9;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');
?>
<!--<p style="color: red">Не решено!!!</p>-->
<div>
    Напишите функцию, которая принимает массив из 10 целых чисел (от 0 до 9), которая возвращает строку этих чисел в
    виде номера телефона.<br/>
    <p style="background-color: #999999; padding: 5px; border-radius: 10px">
        <b>Example</b><br>
        <code>createPhoneNumber([1,2,3,4,5,6,7,8,9,0]); // => returns "(123) 456-7890"</code>
    </p>
    Возвращаемый формат должен быть правильным, чтобы выполнить эту задачу.<br/>
    Не забудьте пробел после закрывающей скобки!
    <br><br>
    <a href="https://www.codewars.com/kata/525f50e3b73515a6db000b83">ЗАДАЧА</a><br><br>
</div>
<br>
<?
$startTime = microtime(true);// засекли время на выполнене скрипта
?>
<b>Начало.</b><br>
<?
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
$otv = Example9::createPhoneNumber($arr);
myDamp($arr);
?>
<br>
<b>ответ: </b><br>
<?
myDamp($otv);
?>
<br>
<br><b>Конец.</b><br>
Время выполнения скрипта: <?= round(microtime(true) - $startTime, 4) ?> сек.
<br/><br/>
<a href="http://test.loc/sandbox/sandbox.php">Назад.</a>
