<?

// автозагрузка класов
function custom_autoloader($class)
{
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);

//    echo '<br>'.$_SERVER['DOCUMENT_ROOT'] . '/sandbox/' . $class . '.php';

    include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/' . $class . '.php');
}

spl_autoload_register('custom_autoloader');

/**
 * Пока может работать с одинарными массивами
 * @param $data mixed
 * @return void
 */
function myDamp($data)
{
    $tupeV = gettype($data);
    switch ($tupeV) {
        case 'NULL':
            echo '<b>NULL</b>' . '<br>';
            break;
        case 'array':
            if (count($data) == 0)
                echo 'Пустой МАССИВ' . '<br>';
            else {
                echo '<pre>';
                print_r(array_map(function ($value) {
                        return '<b>' . $value . '</b> (' . gettype($value) . ')';
                    }, $data)
                );
                echo '</pre>';
            }
            break;
        default:
            echo '<b>'.$data . '</b> (' . $tupeV . ')' . '<br>';
    }
}

function myDampPrint(array $data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

/**
 * Проверка на четное и нечетное число.
 * Если четное вернет true
 * @param $n int
 * @return bool
 */
function isOddNumber($n){
    return $n%2 == 0;
}
