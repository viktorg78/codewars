<?
use MyArray\Cate6\Example\Example7;
include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');
?>
<p style="color: red">НЕ Решено!!!</p>
<div>
    Данные: массив целых чисел, функция f двух переменных и начальное значение.<br>
    Пример: а = [2, 4, 6, 8, 10, 20], f(x, y) = x + y; инициализация = 0<br>
    Выход: массив целых чисел, скажем, r, такой, что<br><br>
    r = [r[0] = f(init, a[0]), r[1] = f(r[0], a[1]), r[2] = f(r[1], a[ 2]), ...]<br><br>
    В нашем примере: r = [2, 6, 12, 20, 30, 50]<br>
    Задача:<br>
    Напишите следующие функции двух переменных<br>
    сом : (х, у) - х + у<br>
    мини: (х, у) - мин (х, у)<br>
    макси : (х, у) - макс(х, у)<br>
    lcmu : (x, y) - lcm(abs(x), abs(y) (см. примечание для lcm)(наименьшее общее кратнок)<br>
    gcdi : (x, y) - gcd(abs(x), abs(y) (см. примечание для gcd)<br>
    и<br>
    функция oper_array(fct, arr, init) (или operArray или oper-array), где<br>
    fct — это функция двух переменных, применяемая к массиву arr (fct будет одной из som, mini, maxi, lcmu или gcdi)<br>
    init это начальное значение<br><br>
    Примеры:<br>
    а = [18, 69, -90, -78, 65, 40]<br>
    oper_array(gcd, a, a[0]) = [18, 3, 3, 3, 1, 1]<br>
    oper_array(lcm, a, a[0]) = [18, 414, 2070, 26910, 26910, 107640]<br>
    опер_массив (сумма, а, 0) = [18, 87, -3, -81, -16, 24]<br>
    oper_array(мин, а, а[0]) = [18, 18, -90, -90, -90, -90]<br>
    опер_массив (макс, а, а [0]) = [18, 69, 69, 69, 69, 69]<br><br>
    Примечания:<br>
    Форма параметра fct в oper_array (или operArray или oper-array) меняется в зависимости от языка. Вы можете увидеть каждую форму в зависимости от языка в разделе «Ваши тестовые примеры».<br>
    На мой взгляд, косяков нет, все максимально красиво.<br>
    lcm и gcd см.: <a href="https://en.wikipedia.org/wiki/Least_common_multiple">ссылка 1</a> <a href="https://en.wikipedia.org/wiki/Greatest_common_divisor">ссылка 2</a><br>
    вы можете погуглить «уменьшить функцию (ваш язык)», чтобы получить общее представление о функциях сокращения.<br>
    В Shell bash массивы заменяются строками.<br>
    В OCaml массивы заменены списками.<br><br>
    <a href="https://www.codewars.com/kata/56efab15740d301ab40002ee">ЗАДАЧА</a>
</div>
<br>
<?
$startTime = microtime(true);// засекли время на выполнене скрипта
?>
<b>Начало.</b><br>
<?
$a = [18, 69, -90, -78, 65, 40];

$a1 = [0, 46, -46, 69, 33, -92, 8, 27, 67, 19];
$r = [18, 3, 3, 3, 1, 1];
myDamp($a);?>
<b>ответ: </b><br>
<?echo 'gcdi:';
myDamp(Example7::oper_array('gcdi', $a1, 0));
echo 'lcmu:';
myDamp(Example7::oper_array('lcmu', $a, $a[0]));
echo 'com:';
myDamp(Example7::oper_array('com', $a, 0));
echo 'min:';
myDamp(Example7::oper_array('mini', $a, 18));
echo 'max:';
myDamp(Example7::oper_array('maxi', $a, 18));
//myDamp(Example7::gcdi(3, 65));
?>

<br>

<br><b>Конец.</b><br>
Время выполнения скрипта: <?=round(microtime(true) - $startTime, 4)?> сек.
