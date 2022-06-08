<?

use pattern\factory\Factory;

include_once($_SERVER['DOCUMENT_ROOT'] . 'sandbox/init.php');

echo "Патерн фабрика<br>";
echo 'Есть класс корабль и поезд. И фабрика ктороя создает эти классы'."<br><br>";

$factory = new Factory();
$ship = $factory->createShip();
$train = $factory->createTrain();
echo $ship->drive()."<br>";
echo $train->drive();






