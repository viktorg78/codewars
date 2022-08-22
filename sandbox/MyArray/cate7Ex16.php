<?php

use Loger\CreateLogFile;
use MyArray\Cate7\Example\Example16;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
����� ���������� �Fat to Fit Club (FFC)� �������������� ������ � �������� ����������-�����������.<br>
���������� ������������� �� ���� ���������� ������������� �� ������ ���������������.<br>
� ����� ���� ������ ������ n �������������: [14, 30, 5, 7, 9, 11, 15]<br>
�� ����� �����, ������� ��������� �������������� ������ ������������ ����������, ����� ������� �� ������ n + 1 ������������� ������ ������� � ������� 30.<br>
����� ��������� �� ����� 149. �� ������, ��� ��� ���������.<br>
���� dons = [14, 30, 5, 7, 9, 11, 15], �� new_avg(dons, 30) -- 149<br>
<br>
<a href="https://www.codewars.com/kata/569b5cec755dd3534d00000f">������</a>
</div>';
echo '<br>';
$start = microtime(true);// ������� ����� �� ��������� �������
echo '<b>������.</b><br>';

$arr = [5, 2, 3];
$newavg = 6;

myDamp($arr);
myDamp($newavg);

echo '<b>�����: </b><br>';
try {
    myDamp(Example16::newAvg($arr, $newavg));
} catch (Exception $e) {
    echo $e->getMessage();
}
echo '<br><b>�����.</b><br>';
echo '����� ���������� �������: ' . round(microtime(true) - $start, 4) . ' ���.';

