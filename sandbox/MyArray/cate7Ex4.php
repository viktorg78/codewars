<?php

use MyArray\Cate7\Example\Example4;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
������:<br>
��� ������ ����� �����, ����������, �������� �� ����� ��� ��������� ������ ��� ��������.<br>
����� ���� ����� � ���� ������, ��������������� ���������� ��� ��������.<br>
���� ������� ������ ����, �������������� ��� ���: [0] (������ � �����).<br>
<br>
<a href="https://www.codewars.com/kata/5949481f86420f59480000e7">������</a>
</div>';
echo '<br>';

echo '<b>������.</b><br>';
$arr = [10, 5];
myDampPrint($arr);

echo '<b>�����: </b><br>';

echo Example4::oddEven($arr);

echo '<br><b>�����.</b>';
