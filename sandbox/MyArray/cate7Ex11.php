<?php

use MyArray\Cate7\Example\Example11;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
�������� ������� spacify, ����� ��� ���������� �������� ������ � ���������, ������������ ����� ������ ��������.<br>
������:<br>
spacify("hello world") // "h e l l o   w o r l d"<br>
<br>
<a href="https://www.codewars.com/kata/557af4c6169ac832300000ba">������</a>
</div>';
echo '<br>';

echo '<b>������.</b><br>';
$s = "hello world";
myDamp($s);
echo '<b>�����: </b><br>';
myDamp(Example11::spacify($s));
echo '<br><b>�����.</b>';