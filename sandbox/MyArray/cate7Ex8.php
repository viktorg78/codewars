<?php

use MyArray\Cate7\Example\Example8;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
�����������<br>
���������� ����� � ��� �����, ����� �������� ����������� � ����������� �������.<br>
������<br>
�������� �����, �������, �������� �� �� ���������� ��� ���.<br>
<br>
<a href="https://www.codewars.com/kata/5a87449ab1710171300000fd">������</a>
</div>';
echo '<br>';

echo '<b>������.</b><br>';
$n = 104;
echo '�����:' . $n . '<br>';
echo '<b>�����: </b><br>';
echo Example8::tidyNumber($n) ? '�������� �����' : '�� �������� �����';
echo '<br><b>�����.</b>';
