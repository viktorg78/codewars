<?php

use MyArray\Cate7\Example\Example6;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
�������� ������ ���� (x), ��� ����� ������� ������ ����, ��������������� � ���������� ������� �� ���������� ������� � ������.<br>
���� ��� ����� ����� ���������� ��������� �����, ������������ ��� ������ ������ ���������� �� � ��� �������, � ������� ��� ��������� � ������ ������.<br>
��� ����� ����� ���������������.<br>
<br>
<a href="https://www.codewars.com/kata/57eba158e8ca2c8aba0002a0">������</a>
</div>';
echo '<br>';

echo '<b>������.</b><br>';
$str = 'what time are we climbing up the volcano';
echo $str . '<br>';
echo 'time are we the climbing volcano up what' . '<br>';
echo '<b>�����: </b><br>';
myDampPrint(Example6::last($str));

myDampPrint(Example6::lastAlternative($str));
echo '<br><b>�����.</b>';
