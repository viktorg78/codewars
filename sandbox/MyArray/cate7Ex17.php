<?php

use MyArray\Cate7\Example\Example17;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
������<br>
���� �������� � �������. ������� ���������� ����� ����� N, �����, ���<br>
������� :<br>
N ������� �� ��������<br>
N ������ ��� ����� �������<br>
N ������ 0.<br>
�������<br>
��������� (��������, �������), ������������ � �������, �������� ������ �������������� ����������.<br>
�������������, ��� �������� ������.<br>
<br>
<a href="https://www.codewars.com/kata/5aba780a6a176b029800041c">������</a>
</div>';
echo '<br>';
$start = microtime(true);// ������� ����� �� ��������� �������
echo '<b>������.</b><br>';
$divisor = 37;
$bound = 200;
echo '��������:';
myDamp($divisor);
echo '�������:';
myDamp($bound);
echo '<br>';
echo '<b>�����: </b><br>';
myDamp(Example17::maxMultiple($divisor, $bound));
echo '<br><b>�����.</b><br>';
echo '����� ���������� �������: ' . round(microtime(true) - $start, 4) . ' ���.';


