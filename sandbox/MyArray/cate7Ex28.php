<?php

use MyArray\Cate7\Example\Example28;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
�������� ��������� (���������) ������ (������, ������,..) ������� m * n, ���� ������ ������� � ���, ����� ����� ����� ����������� �������� � ������ ������.<br>
��������:<br>
[<br>
[ 1, 2, 3, 4, 5 ] # ����������� �������� ������ ����� 1<br>
, [ 5, 6, 7, 8, 9 ] # ����������� �������� ������ ����� 5<br>
, [ 20, 21, 34, 56, 100 ] # ����������� �������� ������ ����� 20<br>
]<br>
����� �������, ������� ������ ������� 26, ������ ��� ����� ��������� ����� 1 + 5 + 20 = 26.<br>
����������. ��� ������ ����� ������������ �������� ������, ���������� ������������� ��������.<br>
������������� ������������ :)<br>
<br>
<a href="https://www.codewars.com/kata/5d5ee4c35162d9001af7d699">������</a>
</div>';
echo '<br>';
$start = microtime(true);// ������� ����� �� ��������� �������
echo '<b>������.</b><br>';
$numbers = [
    [11, 12, 14, 54],
    [67, 89, 90, 56],
    [7, 9, 4, 3],
    [9, 8, 6, 7]
];
myDampPrint($numbers);
echo '<b>�����: </b><br>';
myDamp(Example28::sumOfMinimums($numbers));
echo '<br><b>�����.</b><br>';
echo '����� ���������� �������: ' . round(microtime(true) - $start, 4) . ' ���.';

