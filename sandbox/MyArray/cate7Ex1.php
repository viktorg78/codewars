<?php

use MyArray\Cate7\Example\Example1;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
����� �������� �����<br>
<br>
������: ��� ����������� ���������������� �������� �����:<br>
��������� ����� ����� � n-� ������ ����� ������������ (������� � ������� 1), ��������: (���� - �����)<br>
<a href="https://www.codewars.com/kata/55fd2d567d94ac3bc9000064">������</a>
</div>';
echo '<br>';

echo '<b>������.</b><br>';
$x = 19;
echo '������ � ' . $x;
echo '<br>';
echo '<b>�����: </b>' . Example1::getSumm($x);

echo '<br><b>�����.</b>';
