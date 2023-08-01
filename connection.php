<?php
session_start();
$host="students";//host name
$db_user="z1697722";//Mysql username
$db_password="19910123";//Mysql password
$database="z1697722";//database name
$con=mysql_connect($host,$db_user,$db_password) or die("error");
mysql_select_db($database) or die("error");
?>










