<?php

use MyArray\Cate7\Example\Example15;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
������� ������, ���������� ������ ������ � ��� ��� ������� ASCII � ��������� �� ������, ����� ������� ����� � ������� ��� ����� total1:<br>
\'ABC\' --> \'A\' = 65, \'B\' = 66, \'C\' = 67 --> 656667<br>
����� �������� ����� ��������� ����� 7 �� ����� 1 � �������� ��� ����� total2:<br>
total1 = 656667<br>
total2 = 656661<br>
����� ������� ������� ����� ������ ���� � total1 � total2:<br>
<br>
<a href="https://www.codewars.com/kata/57f75cc397d62fc93d000059">������</a>
</div>';
echo '<br>';

echo '<b>������.</b><br>';
$str = "ABC";
$str1 = "abcdef"; // ����� 6
$str2 = 'MM'; //����� 24
myDamp($str1);
echo '����� �� ��������!!!';
echo '<b>�����: </b><br>';
myDamp(Example15::calc($str1));
echo '<br><b>�����.</b>';
