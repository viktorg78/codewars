<?php

use MyArray\Cate7\Example\Example18;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
������<br>
��� ������ ����� �����. ������� ������������ ������������, ���������� ��� ��������� ���� �������� ����� � �������.<br>
�������<br>
������ �������/������ �� ����� 2.<br>
����� �������/������ ����� ���� ��� ��������������, ��� � ��������������, � ����� ������.<br>
<br>
<a href="https://www.codewars.com/kata/5a4138acf28b82aa43000117">������</a>
</div>';
echo '<br>';
$start = microtime(true);// ������� ����� �� ��������� �������
echo '<b>������.</b><br>';
$array = [-23, 4, -5, 99, -27, 329, -2, 7, -921];
myDamp($array);

echo '<b>�����: </b><br>';
myDamp(Example18::adjacentElementsProduct($array));
echo '<br><b>�����.</b><br>';
echo '����� ���������� �������: ' . round(microtime(true) - $start, 4) . ' ���.';



