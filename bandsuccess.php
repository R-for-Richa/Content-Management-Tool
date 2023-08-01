<?php ob_start(); ?>
<?php
session_start();
require_once('connection.php');
$bname=$_SESSION['bname'];
$name=$_SESSION['a_fname'];
$brate=$_SESSION['brate'];

$a_lname=$_SESSION['a_lname'];
$name=$name.$a_lname;
$_SESSION['aname']=$name;
$a_phne=$_SESSION['a_phne'];

$a_addr1=$_SESSION['a_addr1'];

$a_city=$_SESSION['a_city'];
$a_state=$_SESSION['a_state'];
$a_zip=$_SESSION['a_zip'];
$addr=$a_addr1+$a_city+$a_state+$a_zip;

$bl_fname=$_SESSION['bl_fname'];
$bl_lname=$_SESSION['bl_lname'];
$bl_phne=$_SESSION['bl_phne'];
$bl_name= $bl_fname.$bl_lname;
$_SESSION['lname']=$bl_name;


$mem_count=$_POST['mem_count'];

$_SESSION['mem_count']=$mem_count;
$mem1=$_POST['mem1'];
$_SESSION['mem1']=$mem1;
$mem2=$_POST['mem2'];
$_SESSION['mem2']=$mem2;
$mem3=$_POST['mem3'];
$_SESSION['mem3']=$mem3;
$mem4=$_POST['mem4'];
$_SESSION['mem4']=$mem4;
$mem5=$_POST['mem5'];
$_SESSION['mem5']=$mem5;

mysql_query("insert into band_agent(name,cell_phone,address) values('$name','$a_phne','$a_addr1')");
 $result=mysql_query("select band_agent_id from band_agent where name='$name'");
 $row=mysql_fetch_row($result);
 mysql_query("insert into band_leader(name,cell_phone) values('$bl_name','$bl_phne')");
  
   $result1=mysql_query("select band_leader_id from band_leader where name='$bl_name'");
   $row1=mysql_fetch_row($result1);
   mysql_query("insert into band(band_name,band_agent_id,band_leader_id,concert_rate_per_event) values('$bname','$row[0]','$row1[0]','$brate')");
    
     $result2=mysql_query("select band_id from band where band_name='$bname'");
     $row2=mysql_fetch_row($result2);
     mysql_query("insert into band_members values('$row2[0]','$mem1')");
	 mysql_query("insert into band_members values('$row2[0]','$mem2')");
	 mysql_query("insert into band_members values('$row2[0]','$mem3')");
	 mysql_query("insert into band_members values('$row2[0]','$mem4')");
	 mysql_query("insert into band_members values('$row2[0]','$mem5')");
     header('Location: http://students.cs.niu.edu/~cs56712/bandadded.php');
?>
<?php ob_flush(); ?>





