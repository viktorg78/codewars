<?

use pattern\FactoryMethod\DesignerFactory;
use pattern\FactoryMethod\DeveloperFactory;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo "Патерн фабричный метод.<br>";

$developer = DeveloperFactory::make();
$designer = DesignerFactory::make();
$developer->work();
$designer->work();







