<?
include_once($_SERVER['DOCUMENT_ROOT'] . 'sandbox/init.php');
echo '������ �����';
echo '<br>';
echo '��� ������� ���������� ��������� ���� ������';
throw new \Exceptions\MyException('��� ������������ ������ 2');

