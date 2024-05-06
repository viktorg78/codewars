<?


use pattern\Singleton\Connection;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo "Патерн Одиночка.<br>";

$connection = new Connection();
$connection::setName('lara');
$connection2 = new Connection();
var_dump($connection::getName());
var_dump($connection2::getName());

