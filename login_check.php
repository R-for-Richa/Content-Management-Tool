<?php ob_start(); ?>
<?php
$_SESSION['id']=$_POST['id'];
$id=$_POST['id'];
$pass=$_POST['password'];
require_once("connection.php");
 $result = mysql_query("SELECT * FROM users where id='$id' and password='$pass'");
 $row=mysql_fetch_array($result);
 $rowCount = mysql_num_rows($result);
if($rowCount >0)
  {
    if($row[0] == 'cm3456' && $row[1] == 'cooo')
    header('Location: report.html');
	else if($row[0] == 'cm5678' && $row[1] == 'stafff')
	header('Location: staffhome.php');
	else  if($row[0] == 'cm1234' && $row[1] == 'manager')
	{
	$_SESSION['mid']=$id;
	header('Location: managerhome.php');
	}
  }
  else
  {
	header('Location: loginattempt.php');
  }
?>
<?php ob_flush(); ?>