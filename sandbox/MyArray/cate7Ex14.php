<?php

use MyArray\Cate7\Example\Example14;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
�������� ������ �������, ������� ���� ��� ������� ��������� ������ (������) �� ������� ���� �� ���� ��������� �� ��� �������� �����.<br>
������ ��� �������� ����� ����� � ���� (��� ������� ��� ������ ��� �������� ��� structin C - C: ��. ������� �������� ������� - )<br>
������ ����� ����� � ������<br>
�������� ���� ������ ���� � ��� �� �������, ��� � � �������� �������.<br>
������� ��������� �� ������ ������:<br>
a = ["az", "toto", "picaro", "zone", "kiwi"] --><br>
[["az", "toto picaro zone kiwi"], ["az toto", "picaro zone kiwi"], ["az toto picaro", "zone kiwi"], ["az toto picaro zone", "kiwi"]]<br>
<br>
<a href="https://www.codewars.com/kata/56f3a1e899b386da78000732">������</a>
</div>';
echo '<br>';

echo '<b>������.</b><br>';
$arr = ["I", "wish", "I", "hadn't", "come"];
myDamp($arr);
echo '<b>�����: </b><br>';
myDampPrint(Example14::partlist($arr));
echo '<br><b>�����.</b>';
