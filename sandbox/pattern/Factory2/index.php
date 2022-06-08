<?

use pattern\Factory2\Factory;

include_once($_SERVER['DOCUMENT_ROOT'] . 'sandbox/init.php');


echo "Патерн фабрика объекты настраиваютс внутри фабричного метода<br>";

echo "Все тоже самое, но название класса мередаем в фабрику в виде строки<br><br>";

$factory = new Factory();

$ship = $factory->createSubject('Ship');
$car = $factory->createSubject('Car');
echo $ship->createShip();
echo $car->createCar();

