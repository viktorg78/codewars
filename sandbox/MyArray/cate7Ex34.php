<?php

use MyArray\Cate7\Example\Example34;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
��� ����� ������������ ������ �������� (������������� ������� � PHP, ������� � COBOL), �������������� ������ � �������������,<br>
������� ����������� �� ������� � ��������� ������� �������������, ������� �� �����������.<br>
���� ������ ������� ����:<br>
�������� true, ���� ��� ������������ � ������ ���������� ���� � ��� �� ����, ��� �� ����� � ��������� ������.<br>
<br>
<a href="https://www.codewars.com/kata/58287977ef8d4451f90001a0">������</a>
</div>';
echo '<br>';
$start = microtime(true);// ������� ����� �� ��������� �������
echo '<b>������.</b><br>';
$a = [
    [
        "first_name" => "Daniel",
        "last_name" => "J.",
        "country" => "Aruba",
        "continent" => "Americas",
        "age" => 42,
        "language" => "JavaScript"
    ],
    [
        "first_name" => "Kseniya",
        "last_name" => "T.",
        "country" => "Belarus",
        "continent" => "Europe",
        "age" => 22,
        "language" => "JavaScript"
    ],
    [
        "first_name" => "Hanna",
        "last_name" => "L.",
        "country" => "Hungary",
        "continent" => "Europe",
        "age" => 65,
        "language" => "JavaScript"
    ]
];
myDampPrint($a);
echo '<b>�����: </b><br>';
echo Example34::isSameLanguage($a) ? 'true' : 'false';
echo '<br><b>�����.</b><br>';
echo '����� ���������� �������: ' . round(microtime(true) - $start, 4) . ' ���.';
