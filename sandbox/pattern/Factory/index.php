<?

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo "Патерн фабрика.<br>";
echo "Класс создает другой класс.<br>";
$worker = \pattern\Factory\WorkerFactory::make();
$worker->setName('Борис');
var_dump($worker->getName());






