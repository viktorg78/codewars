<?

use MyArray\Cate7\Example\Example66;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Создайте функцию, которая принимает два аргумента:<br>
Массив объектов, на которых изображен сезон, команда и страна победителя Лиги чемпионов.<br>
Страна (в виде строки, например, «Португалия»)<br>
Затем ваша функция должна вернуть число, которое представляет количество побед команды из данной страны. Возвращает 0, если выигрышей не было.<br>
Например, если входной массив выглядит следующим образом:<br>
countWins(winnerList1, \'Spain\') => should return 2<br>
countWins(winnerList1, \'Portugal\') => should return 1<br>
countWins(winnerList1, \'Sportland\') => should return 0<br>
<br>
<a href="https://www.codewars.com/kata/581b30af1ef8ee6aea0015b9">Задача</a>
</div>';
echo '<br>';
$start = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$winnerList =
    [
        ['season' => '1996–97', 'team' => 'Borussia Dortmund', 'country' => 'Germany'],
        ['season' => '1997–98', 'team' => 'Real Madrid', 'country' => 'Spain'],
        ['season' => '1998–99', 'team' => 'Manchester United', 'country' => 'England'],
        ['season' => '1999–00', 'team' => 'Real Madrid', 'country' => 'Spain'],
        ['season' => '2000–01', 'team' => 'Bayern Munich', 'country' => 'Germany'],
        ['season' => '2001–02', 'team' => 'Real Madrid', 'country' => 'Spain'],
        ['season' => '2002–03', 'team' => 'Milan', 'country' => 'Italy'],
        ['season' => '2003–04', 'team' => 'Porto', 'country' => 'Portugal'],
        ['season' => '2004–05', 'team' => 'Liverpool', 'country' => 'England'],
        ['season' => '2005–06', 'team' => 'Barcelona', 'country' => 'Spain'],
        ['season' => '2006–07', 'team' => 'Milan', 'country' => 'Italy'],
        ['season' => '2007–08', 'team' => 'Manchester United', 'country' => 'England'],
        ['season' => '2008–09', 'team' => 'Barcelona', 'country' => 'Spain'],
        ['season' => '2009–10', 'team' => 'Internazionale', 'country' => 'Italy'],
        ['season' => '2010–11', 'team' => 'Barcelona', 'country' => 'Spain'],
        ['season' => '2011–12', 'team' => 'Chelsea', 'country' => 'England'],
        ['season' => '2012–13', 'team' => 'Bayern', 'country' => 'Germany'],
        ['season' => '2013–14', 'team' => 'Real Madrid', 'country' => 'Spain'],
        ['season' => '2014–15', 'team' => 'Barcelona', 'country' => 'Spain'],
        ['season' => '2015–16', 'team' => 'Real Madrid', 'country' => 'Spain']
    ];
$country = 'Spain';
myDampPrint($winnerList);
myDamp($country);
echo '<b>ответ: </b><br>';
myDamp(Example66::countWins($winnerList, $country));
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $start, 4) . ' сек.';
