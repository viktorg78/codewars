<?php

use MyArray\Cate7\Example\Example29;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
���� ������ � ����������, ������� ������ �� ������� ����������� �� ������� ��������� �� ���� ������� ����.<br>
����� ������ ���� ��������� � ��� �������, � ������� ��� ���������� � �������.<br>
����:<br>
������ �������� ������ (0 <= s <= 100)<br>
������� HD (0 <= c <= 500)<br>
�����:<br>
���������� ������, ������� ����� ��������� ��������� �� HD.<br>
save([4,4,4,3,3], 12) -> 3<br>
# 4+4+4 <= 12, but 4+4+4+3 > 12<br>
save([4,4,4,3,3], 11) -> 2<br>
# 4+4 <= 11, but 4+4+4 > 11<br>
<br>
<a href="https://www.codewars.com/kata/5d49c93d089c6e000ff8428c">������</a>
</div>';
echo '<br>';
$start = microtime(true);// ������� ����� �� ��������� �������
echo '<b>������.</b><br>';
$sizes = [4,4,4,3,3];
$hd = 12;
myDamp($sizes);
myDamp($hd);
echo '<b>�����: </b><br>';
myDamp(Example29::save($sizes, $hd));
echo '<br><b>�����.</b><br>';
echo '����� ���������� �������: ' . round(microtime(true) - $start, 4) . ' ���.';

