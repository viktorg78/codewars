<?php

use MyArray\Cate7\Example\Example13;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
�� ����� ��� ����!<br>
� ���� ���� �� ��������� ��������� ����� � �������� ����� ������� � ������ ������� ���������� ���� �����, ����� ������� � 5 � ���.<br>
��������� � �������� ����� ������������!<br>
�������:<br>
1,9 - 1,2,3,4,6,7,8,9 - ��������� 8<br>
4,17 - 4,6,7,8,9,10,11,12,13,14,16,17 - ��������� 12<br>
��������� ����� ��������� �������. ;-)<br>
��������� ����� ������ ����� ������ ���������. ��� ����� ����� ���� � ��������������!<br>
��� ����� ��������� ���� ������� � ��, ��� �� �� �������. ����� ����, ���-�� �� ��� ������ ������� ����� �������������� �������.<br>
��������� ������������ �� ��� ����������� �, ����������, �� �������� ������������� � ������� ���� ����! :-)<br>
� ����� ������ ������ ����. ����������, ����������� �� ��� ��� ����!<br>
<br>
<a href="https://www.codewars.com/kata/5813d19765d81c592200001a">������</a>
</div>';
echo '<br>';

echo '<b>������.</b><br>';
$start = 4;
$end = 17;
echo $start . ' - ' . $end . '<br>';
echo '<b>�����: </b><br>';
myDamp(Example13::dontGiveMeFive($start, $end));
echo '<br><b>�����.</b>';
