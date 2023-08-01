<?php ob_start(); ?>
<?php
session_start();
require_once('connection.php');
$id=$_SESSION['id'];
$flag=0;
foreach($_POST['vendor'] as $v)
{
 $flag=1;
 mysql_query("insert into concert_vendor values('$id','$v')");
}
if($flag==1)
{
 header('Location: http://students.cs.niu.edu/~cs56712/eventadded.php');
}
?>
<?php ob_flush(); ?>