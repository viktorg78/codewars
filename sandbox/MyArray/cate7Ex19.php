<?php

use MyArray\Cate7\Example\Example19;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
������ Nice ������������ ��� ������, � ������� ��� ������� �������� n � ������� ����� ���� ������� n - 1 ��� n + 1 � �������.<br>
�������:<br>
[2, 10, 9, 3] is a nice array because<br>
 2 =  3 - 1<br>
10 =  9 + 1<br>
 3 =  2 + 1<br>
 9 = 10 - 1<br>
<br>
<a href="https://www.codewars.com/kata/59b844528bcb7735560000a0">������</a>
</div>';
echo '<br>';
$start = microtime(true);// ������� ����� �� ��������� �������
echo '<b>������.</b><br>';
$arr = [0, 1, 2, 3];
myDamp($arr);
echo '<b>�����: </b><br>';
myDamp(Example19::isNice($arr));
echo '<br><b>�����.</b><br>';
echo '����� ���������� �������: ' . round(microtime(true) - $start, 4) . ' ���.';
