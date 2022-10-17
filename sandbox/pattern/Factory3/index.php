<?
include_once($_SERVER['DOCUMENT_ROOT'] . 'sandbox/init.php');
echo 'Абстрактная фабрика';

$toy = 'Boat';

switch ($toy) {
    case 'Car':
        $factory = new \pattern\Factory3\CarFactory();
        break;
    case 'Boat' :
        $factory = new  \pattern\Factory3\BoatFactory();
        break;
}
$car = $factory->createFromWooden();
echo '<br>' . $car->drive();
