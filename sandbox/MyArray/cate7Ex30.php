<?php

use MyArray\Cate7\Example\Example30;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
��� ����� ������������ ������ �������� (����� � ruby), �������������� ������ � �������������,<br>
������� ����������� �� ������� � ������� �������������, ������� �� ����������� �������.<br>
���� ������ � ������� ���������� ������������� JavaScript �� ������.<br>
��������, �������� ��������� ������:<br>
������ ����������1 = [<br>
{ firstName: \'���\', lastName: \'M.\', ������: \'���������\', ���������: \'������\', �������: 19 ���, ����: \'JavaScript\' },<br>
{ firstName: \'Maia\', lastName: \'S.\', ������: \'�����\', ���������: \'�������\', �������: 28, ����: \'JavaScript\' },<br>
{ ���: \'�����\', �������: \'�.\', ������: \'�������\', ���������: \'����\', �������: 35, ����: \'HTML\' },<br>
{���: \'������\', �������: \'�.\', ������: \'�����������\', ���������: \'����\', �������: 30, ����: \'CSS\' }<br>
];<br>
���� ������� ������ ���������� ����� 1.<br>
���� � ������ ��� ������������� JavaScript, ���� ������� ������ ������� 0.<br>
�������:<br>
������ ����� ������ ����� ������ � JavaScript.<br>
��� ������ ������ ����� ��������������� � ��������������, ��� � ������� ����.<br>
<br>
<a href="https://www.codewars.com/kata/582746fa14b3892727000c4f">������</a>
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
        "language" => "JavaScript"
    ],
    [
        "first_name" => "Maia",
        "last_name" => "S.",
        "country" => "Tahiti",
        "continent" => "Oceania",
        "age" => 28,
        "language" => "JavaScript"
    ],
    [
        "first_name" => "Shufen",
        "last_name" => "L.",
        "country" => "Taiwan",
        "continent" => "Asia",
        "age" => 30,
        "language" => "HTML"
    ],
    [
        "first_name" => "Sumayah",
        "last_name" => "M.",
        "country" => "Tajikistan",
        "continent" => "Asia",
        "age" => 30,
        "language" => "CSS"
    ]
];
myDampPrint($a);
echo '<b>�����: </b><br>';
myDamp(Example30::countDevelopers($a));
echo '<br><b>�����.</b><br>';
echo '����� ���������� �������: ' . round(microtime(true) - $start, 4) . ' ���.';
