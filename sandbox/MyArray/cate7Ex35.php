<?php

use MyArray\Cate7\Example\Example35;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
��� ����� ������������ ������ �������� (������������� ������� � PHP), �������������� ������ � �������������,<br>
������� ����������� �� ������� � ��������� ������� �������������, ������� �� �����������. ������ ���������� � ������������ � ���, ��� ����������������� ������.<br>
���� ������ � ������� ���� �� ��������� �����:<br>
firstName �����, ����� ������ ������� ������������������� ������������ Python, ��� ��<br>
�� ����� ������������� Python, ���� �� ���� ����������� Python �� ����������������.<br>
��������, �������� ��������� ������� ������:<br>
���� ������� ������ ���������� ��������, ������-����.<br>
�������:<br>
������� ������ ������ ����� �������������� � ��������������, ��� � ������� ����.<br>
<br>
<a href="https://www.codewars.com/kata/5827bc50f524dd029d0005f2">������</a>
</div>';
echo '<br>';
$start = microtime(true);// ������� ����� �� ��������� �������
echo '<b>������.</b><br>';
$a = [
    [
        "first_name" => "Mark",
        "last_name" => "G.",
        "country" => "Scotland",
        "continent" => "Europe",
        "age" => 22,
        "language" => "JavaScript"
    ],
    [
        "first_name" => "Victoria",
        "last_name" => "T.",
        "country" => "Puerto Rico",
        "continent" => "Americas",
        "age" => 30,
        "language" => "Python"
    ],
    [
        "first_name" => "Emma",
        "last_name" => "B.",
        "country" => "Norway",
        "continent" => "Europe",
        "age" => 19,
        "language" => "Python"
    ]
];
myDampPrint($a);
echo '<b>�����: </b><br>';
myDamp(Example35::getFirstPython($a));
echo '<br><b>�����.</b><br>';
echo '����� ���������� �������: ' . round(microtime(true) - $start, 4) . ' ���.';
