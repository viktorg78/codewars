<?php

use MyArray\Cate7\Example\Example3;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
�������� � �������� (������������ �������������)<br>
<br>
������<br>
�������� ������/������ [] ����� �����, �������� ������ ��������� ���� �� �������,<br>
����� prod[i] ��� ����� ������������ ���� ��������� Arr[], ����� Arr[i].<br>
<br>
�������<br>
������ �������/������ �� ����� 2<br>
����� �������/������ ����� ������ ��������������<br>
�������� ���������� ����� � �������/������<br>
<br>
productArray ({12,20}) ==>  return {20,12}<br>
����������:<br>
������ ������� � ������� prod [] 12 �������� ������������� ���� ��������� �������, ����� ������� ��������.<br>
������ ������� 20 �������� ������������� ���� ��������� �������, ����� ������� ��������.<br><br>
productArray ({1,5,2}) ==> return {10,2,5}<br>
����������:<br>
������ ������� 10 �������� ������������� ���� ��������� �������, ����� ������� �������� 1.<br>
������ ������� 2 �������� ������������� ���� ��������� �������, ����� ������� �������� 5.<br>
������ ������� 5 �������� ������������� ���� ��������� �������, ����� �������� �������� 2.<br><br>
productArray ({10,3,5,6,2}) return ==> {180,600,360,300,900}<br>
����������:<br>
������ ������� 180 �������� ������������� ���� ��������� �������, ����� ������� �������� 10.<br>
������ ������� 600 �������� ������������� ���� ��������� �������, ����� ������� �������� 3.<br>
������ ������� 360 �������� ������������� ���� ��������� �������, ����� �������� �������� 5.<br>
��������� ������� 300 �������� ������������� ���� ��������� �������, ����� ���������� �������� 6.<br>
�������, ����� ������� 900 �������� ������������� ���� ��������� �������, ����� ������ �������� 2.<br>
<a href="https://www.codewars.com/kata/5a905c2157c562994900009d">������</a>
</div>';
echo '<br>';

echo '<b>������.</b><br>';

$arr = [1, 2, 3, 4];
myDampPrint($arr);
echo '<b>�����: </b><br>';

myDampPrint(Example3::productArray($arr));
echo '<br><b>�����.</b>';