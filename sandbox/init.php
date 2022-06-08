<?

// автозагрузка класов
function custom_autoloader($class)
{
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);

//    echo '<br>'.$_SERVER['DOCUMENT_ROOT'] . '/sandbox/' . $class . '.php';

    include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/' . $class . '.php');
}

spl_autoload_register('custom_autoloader');

function myDamp(array $data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
