<?

use MyArray\Cate6\Example\Example10;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');
?>
<p style="color: red">Не решено!!!</p>
<div>
    Вам дается секретное сообщение, которое необходимо расшифровать. Вот что вам нужно знать, чтобы расшифровать
    его:<br/><br/>
    Для каждого слова:<br/>
    вторая и последняя буквы меняются местами (например, Hello становится Holle)<br/>
    первая буква заменяется кодом символа (например, H становится 72)<br/><br/>

    Примечание: специальные символы не используются, только буквы и пробелы.<br/>
    <div style="background-color: #999999; padding: 5px; border-radius: 10px; margin-top: 10px">
        <b>Example</b>
    <ul>
        <li><code>decipherThis('72olle 103doo 100ya'); // 'Hello good day'</code></li>
        <li><code>decipherThis('82yade 115te 103o'); // 'Ready set go'</code></li>
    </ul>
    </div>
    <br><br>
    <a href="https://www.codewars.com/kata/581e014b55f2c52bb00000f8">ЗАДАЧА</a><br><br>
</div>
<br>
<?
$startTime = microtime(true);// засекли время на выполнене скрипта
?>
<b>Начало.</b><br>
<?
$str = '65 119esi 111dl 111lw 108dvei 105n 97n 111ka';

myDamp($str);
?>
<br>
<b>ответ: </b><br>
<?
$otv = Example10::decipherThis($str);
myDamp($otv);
?>
<br>
<br><b>Конец.</b><br>
Время выполнения скрипта: <?= round(microtime(true) - $startTime, 4) ?> сек.
<br/><br/>
<a href="http://test.loc/sandbox/sandbox.php">Назад.</a>
