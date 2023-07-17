<?

// ������������ ������
function custom_autoloader($class)
{
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);

//    echo '<br>'.$_SERVER['DOCUMENT_ROOT'] . '/sandbox/' . $class . '.php';

    include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/' . $class . '.php');
}

spl_autoload_register('custom_autoloader');

/**
 * ���� ����� �������� � ���������� ���������
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
                echo '������ ������' . '<br>';
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
 * ���������� ������ � 1 �����
 * @param array $data
 * @param string|null $name �������� �������
 * @return void
 */
function myDampLine(array $data, string $name = null)
{
    if ($name) echo $name.' = ';
    echo '[';
    foreach ($data as $i => $val){
        echo  ($i == count($data)-1) ? $val : $val.', ';
    }
    echo ']<br>';
}

/**
 * ��������� ������
 * @param array $data
 * @param string|null $name �������� �������
 * @return void
 */
function myDampLine2(array $data, string $name = null){
    $l = 0;
    if ($name) {
        $l = mb_strlen($name);
        echo $name." = \t";
    }
    foreach ($data as $i => $val){
        if ($l && $i) echo str_repeat("\t&nbsp;", $l+3);
        myDampLine($val);
    }
}

/**
 * �������� �� ������ � �������� �����.
 * ���� ������ ������ true
 * @param $n int
 * @return bool
 */
function isOddNumber($n){
    return $n%2 == 0;
}
