<?php

use MyArray\Cate7\Example\Example7;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
������<br>
�������� ������/������ [] �� n ����� �����, ����� ������������ ����� ����� � ������� ��� ����������.<br>
������� :<br>
������ �������/������ �� ����� 3.<br>
����� �������/������ ����� �������� �� �������������, ������������� � ������� �����.<br>
�������� ���������� ����� � �������/������, �.�. (������������ �� ����������� ��� ������������).<br>
<br>
<a href="https://www.codewars.com/kata/5aa1bcda373c2eb596000112">������</a>
</div>';
echo '<br>';

echo '<b>������.</b><br>';
$arr = [2, 9, 13, 10, 5, 2, 9, 5];
myDampPrint($arr);
echo '<b>�����: </b><br>';
echo Example7::maxTriSum($arr);
echo '<br><b>�����.</b>';
