<?php

use MyArray\Cate7\Example\Example12;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
��� ����� ������������ ������ � ���������� ��������.<br>
�� ������ ���������, ��� ��� �������� � ������� ���� ��� ����� ����������� ��������.<br>
���� ��� ����, ������� true. � ��������� ������ ������� ����.<br>
�� ������ ������������, ��� ��� �������� � ������� �������� �������.<br>
<br>
<a href="https://www.codewars.com/kata/57cc981a58da9e302a000214">������</a>
</div>';
echo '<br>';

echo '<b>������.</b><br>';
$a = [78, 117, 110, 99, 104, 117, 107, 115];
$limit = 200;

echo '<b>�����: </b><br>';
echo  Example12::smallEnough($a, $limit) ? 'true': 'false';
echo '<br><b>�����.</b>';
