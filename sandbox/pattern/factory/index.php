<?

use pattern\factory\Factory;

include_once($_SERVER['DOCUMENT_ROOT'] . 'sandbox/init.php');

echo "������ �������<br>";
echo '���� ����� ������� � �����. � ������� ������ ������� ��� ������'."<br><br>";

$factory = new Factory();
$ship = $factory->createShip();
$train = $factory->createTrain();
echo $ship->drive()."<br>";
echo $train->drive();






