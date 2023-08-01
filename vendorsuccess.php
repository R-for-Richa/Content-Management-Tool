<?php ob_start(); ?>
<?php
session_start();
require_once('connection.php');
$result=mysql_query("select vendor_id from vendor order by vendor_id DESC");
$row=mysql_fetch_row($result);
$vid=$row[0];
$vid=$vid+1;
$_SESSION['vendorid']=$vid;
$result2=mysql_query("select category_id from category order by category_id DESC");
$row2=mysql_fetch_row($result2);
$cid=$row2[0];
$cid=$cid+1;
$_SESSION['cid']=$cid;
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
mysql_query("insert into vendor values('$vid','$vendor',$officephone,$cellphone,'$money')");
foreach($_POST['category'] as $c)
{

if($c=="other")
{
$othername=$_POST['dynamic'];
$_SESSION['other']=$othername;
mysql_query("insert into category values('$cid','$othername')");
$result1=mysql_query("select category_id from category where category_name='$othername'");
$row1=mysql_fetch_row($result1);
mysql_query("insert into vendor_category values('$vid','$row1[0]')");
}
else
mysql_query("insert into vendor_category values('$vid','$c')");
}
header('Location: http://students.cs.niu.edu/~cs56712/vendoradded.php');
?>
<?php ob_flush(); ?>





