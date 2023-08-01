<?php
session_start();
//$_SESSION['id']=$_POST['id'];
$id=$_POST['id'];
$pass=$_POST['password'];
require_once("connection.php");
 $result = mysql_query("SELECT * FROM users where id='$id' and password='$pass'");
 $row=mysql_fetch_array($result);
 $rowCount = mysql_num_rows($result);
if($rowCount >0)
  {
    if($row[2] == 1)
	{
	 $_SESSION['id'] = $id;
     header('Location: report2.php');
	}
	else if($row[2] == 2)
	{
	 $_SESSION['id'] = $id;
	 header('Location: staffhome1.php');
	} 
	else  if($row[2]== 3)
	{
	$_SESSION['id'] = $id;
	header('Location: managerhome1.php');
	}
  }
  else
  {
	header('Location: loginattempt.php');
  }
?>
