<?

use MyArray\Cate6\Example\Example2;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
���� ��� ������� ����� a1 � a2, ������� ���������� ��������������� ������ r � ������������������ ������� ����� a1, ������� �������� ����������� ����� a2.<br>
������ 1:<br>
a1 = ["arp", "live", "strong"]<br>
a2 = ["lively", "alive", "harp", "sharp", "armstrong"]<br>
returns ["arp", "live", "strong"]<br>
������ 2:<br>
a1 = ["tarp", "mice", "bull"]<br>
a2 = ["lively", "alive", "harp", "sharp", "armstrong"]<br>
���������� []<br>
�������:<br>
������� ������������ � ������ �������. ��. ����� �������� �������� ��� �������� �� ����� �����.<br>
� Shell bash a1 � a2 �������� ��������. ������� ������������ ����� ������, � ������� ����� ��������� ��������.<br>
���������: � ��������� ������ r �� ������ �����������.<br>
<br>
<a href="https://www.codewars.com/kata/550554fd08b86f84fe000a58">������</a>
</div>';
echo '<br>';
$startTime = microtime(true);// ������� ����� �� ��������� �������
echo '<b>������.</b><br>';
$array1 = ['live', 'strong', 'arp', '1.9'];
$array2 = ['lively', 'alive','harp','sharp','armstrong', '1.9.2.'];
myDamp($array1);
myDamp($array2);
echo '<b>�����: </b><br>';
myDamp(Example2::inArray($array1, $array2));
echo '<br><b>�����.</b><br>';
echo '����� ���������� �������: ' . round(microtime(true) - $startTime, 4) . ' ���.';
