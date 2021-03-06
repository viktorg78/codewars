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
    if (empty($data)){
        echo 'Пустой массив ';
    }

    echo '<pre>';
    foreach ($data as $index => $value)
    {
        $typeValue = gettype($value);
        echo "[$index]\t=> $value ($typeValue)\n";
    }
//    print_r($data);
    echo '</pre>';
}

function myDampPrint(array $data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
