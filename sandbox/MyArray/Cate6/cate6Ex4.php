<?
use MyArray\Cate6\Example\Example4;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
����������� ������ ������ ����� � �������� ������, � ����� ������� ������.<br>
��������� ��� ��������� ��� �������� �������, ����������, ��� ����� ������ ������ ���� ����� ���� ������.<br>
����� ���������� ������� ������������� ���, ��� ���� �� ��� ���� ������ ����� � ���� ����.<br>
<br>
<a href="https://www.codewars.com/kata/58d76854024c72c3e20000de">������</a>
</div>';
echo '<br>';
$startTime = microtime(true);// ������� ����� �� ��������� �������
echo '<b>������.</b><br>';
$str =  'I really hope it works this time...';
myDamp($str);
echo '<b>�����: </b><br>';
myDamp(Example4::reverse($str));
echo '<br><b>�����.</b><br>';
echo '����� ���������� �������: ' . round(microtime(true) - $startTime, 4) . ' ���.';


