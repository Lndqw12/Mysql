<?php
$host="localhost";
$user="root";
$password="";
$db="3pk";

mysql_connect($host, $user, $password) or die("MySQL ������ ����������!".mysql_error());
mysql_select_db($db) or die("��� ���������� � ��".mysql_error());

$result = mysql_query("SELECT * FROM 3pk");
	echo $result;
?>