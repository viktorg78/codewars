<?php

use MyArray\Cate7\Example\Example22;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
������<br>
�������� ������ ����� �����, ������� ����������� �����, ������� ���������� � ���������� ������������ ������� ������������ ���� ����� �����.<br>
�������<br>
������/������ ����� ��������� ������ ������������� ��������.<br>
������/������ ������ ����� ����� ������ ������<br>
minSum({5,4,2,3}) ==> return (22)<br>
<br>
<a href="https://www.codewars.com/kata/5a523566b3bfa84c2e00010b">������</a>
</div>';
echo '<br>';
$start = microtime(true);// ������� ����� �� ��������� �������
echo '<b>������.</b><br>';
$arr = [5, 1, 9, 3, 7, 7, 2, 10];
myDamp($arr);
echo '<b>�����: </b><br>';
myDamp(Example22::minSum($arr));
echo '<br><b>�����.</b><br>';
echo '����� ���������� �������: ' . round(microtime(true) - $start, 4) . ' ���.';
