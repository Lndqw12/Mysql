<?php
$host="localhost";
$user="root";
$password="";
$db="3pk";

mysql_connect($host, $user, $password) or die("MySQL сервер недоступен!".mysql_error());
mysql_select_db($db) or die("Нет соединения с БД".mysql_error());

$result = mysql_query("SELECT * FROM 3pk");
	echo $result;
?>