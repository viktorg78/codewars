<?php

use MyArray\Cate7\Example\Example2;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
����� � �����<br>
<br>
�������� ������ ����� (� ��������� �������), �� ������ ������� ������.<br>
����� ������������� ������ �������� � �������� �������: a=26, z=1 � �. �.<br>
����� ������� ��������� \'!\', \'?\' � \' \', ������� ������������ ��� \'27\', \'28\' � \'29\' ��������������.<br>
<a href="https://www.codewars.com/kata/57ebaa8f7b45ef590c00000c">������</a>
</div>';
echo '<br>';

echo '<b>������.</b><br>';
$ex = new Example2();
echo '<b>�����: </b><br>';
echo $ex->arrToStr(['24', '12', '23', '22', '4', '26', '9', '8']).'<br>';
echo $ex->arrToStr(['25','7','8','4','14','23','8','25','23','29','16','16','4']).'<br>';
echo $ex->arrToStr(['4', '24']).'<br>';
echo '<br><b>�����.</b>';