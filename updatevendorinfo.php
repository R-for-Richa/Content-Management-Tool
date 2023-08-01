<?php ob_start(); ?>
<?php
session_start();
require_once('connection.php');
$vendorid=$_SESSION['vendorid'];
mysql_query("delete from vendor_category where vendorid='$vendorid'");
$vendor=$_POST['name'];
$_SESSION['vendorname']=$vendor;
$officephone=$_POST['officephone'];
$_SESSION['officephone']=$officephone;
$cellphone=$_POST['cellphone'];
$_SESSION['cellphone']=$cellphone;
$money=$_POST['moneyperevent'];
$_SESSION['money']=$money;
$_SESSION['category']=$_POST['category']; 
//echo "insert into vendor values('$vid','$vendor',$officephone,$cellphone,$money)";
mysql_query("update vendor set name='$vendor',office_phone='$officephone',cell_phone='$cellphone',money_per_event='$money' where vendor_id='$vendorid'");
foreach($_POST['category'] as $p)
{
if($p=="other")
{
$othername=$_POST['dynamic'];
$_SESSION['other']=$othername;
mysql_query("insert into category values('$cid','$othername')");
$result1=mysql_query("select category_id from category where category_name='$othername'");
$row1=mysql_fetch_row($result1);
mysql_query("insert into vendor_category values('$vendorid','$row1[0]')");
}
else
mysql_query("insert into vendor_category values('$vendorid','$p')");
}
header('Location: http://students.cs.niu.edu/~cs56712/vendorupdated.php');
?>
<? ob_flush(); ?>