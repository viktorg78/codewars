<?php

use MyArray\Cate7\Example\Example5;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
������<br>
�������� ������/������ [] ����� �����, ������� ������������ k ������������ �����.<br><br>
�������<br>
������ �������/������ �� ����� 3<br>
����� �������/������ ����� ������������ ����� ����� �������������, ������������� � ������� ��������<br>
�������� ���������� ����� � �������/������.<br>
<br>
<a href="https://www.codewars.com/kata/5a63948acadebff56f000018">������</a>
</div>';
echo '<br>';

echo '<b>������.</b><br>';
$arr = [10, 2, 3, 8, 1, 10, 4];
$size = 5;
myDampPrint($arr);
echo '������:' . $size . '<br>';
echo '<b>�����: </b><br>';

echo Example5::maxProduct($arr, $size);

echo '<br><b>�����.</b>';
