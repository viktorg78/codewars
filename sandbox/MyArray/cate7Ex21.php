<?php

use MyArray\Cate7\Example\Example21;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
��� ����� ������������ ������ �������� (������������� ������� � PHP, ������� � COBOL),<br>
�������������� ������ � �������������, ������� ����������� �� ������� � ��������� ������� �������������, ������� �� �����������.<br>
���� ������ � ������� ������, � ������� ������ ������ ����� ����� ����� �������� ������������ �� ��������� ��������� ���������:<br>
������ firstName ����� , ��� ��� ������ ����� �������� � ����� ����� ?<br>
<br>
<a href="https://www.codewars.com/kata/58279e13c983ca4a2a00002a">������</a>
</div>';
echo '<br>';
$start = microtime(true);// ������� ����� �� ��������� �������
echo '<b>������.</b><br>';
$a = [
    [
        "first_name" => "Sofia",
        "last_name" => "I.",
        "country" => "Argentina",
        "continent" => "Americas",
        "age" => 35,
        "language" => "Java"
    ],
    [
        "first_name" => "Lukas",
        "last_name" => "X.",
        "country" => "Croatia",
        "continent" => "Europe",
        "age" => 35,
        "language" => "Python"
    ],
    [
        "first_name" => "Madison",
        "last_name" => "U.",
        "country" => "United States",
        "continent" => "Americas",
        "age" => 32,
        "language" => "Ruby"
    ]
];
myDampPrint($a);
echo '<b>�����: </b><br>';
myDampPrint(Example21::greet_developers($a));
echo '<br><b>�����.</b><br>';
echo '����� ���������� �������: ' . round(microtime(true) - $start, 4) . ' ���.';

