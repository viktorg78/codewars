<?php

use MyArray\Cate7\Example\Example20;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
��� ����� ������������ ������ �������� (������������� ������� � PHP, ������� � COBOL), �������������� ������ � �������������,<br>
������� ����������� �� ������� � ��������� ������� �������������, ������� �� �����������.<br>
���� ������ � ������� ������ (������������� ������ � PHP, ������� � COBOL),<br>
������� �������� ���������� ������ ����������������, �������������� �� �������.<br>
<br>
<a href="https://www.codewars.com/kata/5828713ed04efde70e000346">������</a>
</div>';
echo '<br>';
$start = microtime(true);// ������� ����� �� ��������� �������
echo '<b>������.</b><br>';
$a = [
    [
        "first_name" => "Noah",
        "last_name" => "M.",
        "country" => "Switzerland",
        "continent" => "Europe",
        "age" => 19,
        "language" => "C"
    ],
    [
        "first_name" => "Anna",
        "last_name" => "R.",
        "country" => "Liechtenstein",
        "continent" => "Europe",
        "age" => 52,
        "language" => "JavaScript"
    ],
    [
        "first_name" => "Ramon",
        "last_name" => "R.",
        "country" => "Paraguay",
        "continent" => "Americas",
        "age" => 29,
        "language" => "Ruby"
    ],
    [
        "first_name" => "George",
        "last_name" => "B.",
        "country" => "England",
        "continent" => "Europe",
        "age" => 81,
        "language" => "C"
    ]
];
myDampPrint($a);
echo '<b>�����: </b><br>';
myDamp(Example20::countLanguages($a));
echo '<br><b>�����.</b><br>';
echo '����� ���������� �������: ' . round(microtime(true) - $start, 4) . ' ���.';
