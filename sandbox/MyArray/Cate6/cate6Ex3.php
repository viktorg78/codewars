<?

use MyArray\Cate6\Example\Example3;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
���� ������ � ���������� �������. ��� ����� �����, ����� ������. ���������� �����!<br>
findUniq([ 1, 1, 1, 2, 1, 1 ]) === 2<br>
findUniq([ 0, 0, 0.55, 0, 0 ]) === 0.55<br>
�������������, ��� ������ �������� �� ����� 3 �����.<br>
����� �������� ����� ������� �������, ��� ��� ��������� � ������������������.<br>
<br>
<a href="https://www.codewars.com/kata/585d7d5adb20cf33cb000235">������</a>
</div>';
echo '<br>';
$startTime = microtime(true);// ������� ����� �� ��������� �������
echo '<b>������.</b><br>';
$a =  [ 1, 0, 0.55, 0, 1 ];
myDamp($a);
echo '<b>�����: </b><br>';
myDamp(Example3::findUniq($a));
echo '<br><b>�����.</b><br>';
echo '����� ���������� �������: ' . round(microtime(true) - $startTime, 4) . ' ���.';

