<?php
require_once('connection.php');
session_start();
$band=$_POST['band'];
$artist=$_POST['artist'];
$location=$_SESSION['location'];
$date=$_SESSION['date'];
$time=$_SESSION['time'];
$seating=$_SESSION['seating'];
$managerid=$_SESSION['managerid'];
$description=$_SESSION['description'];
$name=$_SESSION['eventname'];
$flag=0;
$flag1=0;
$result3=mysql_query("select concert_id from concert order by concert_id DESC");
$row3=mysql_fetch_row($result3);
$id=$row3[0]+1;
$_SESSION['id']=$id;
if(mysql_query("insert into concert values('$id','$location','$date','$time','created','$seating','$managerid','$description','$name')"))
{
 if($_POST['type']==1)
 {
   if(mysql_query("insert into concert_performer values('$id','$band',1)"))
    $flag=1;
 }
 else if($_POST['type']==2)
 {
   if(mysql_query("insert into concert_performer values('$id','$artist',2)"))
   $flag1=1;
   echo $artist;
 }
 }
 ?>
 
<html>
<head profile="http://www.w3.org/2005/10/profile">
<link rel="icon" 
      type="image/gif" 
      href="icon 2.gif">

<link href="styles.css" rel="stylesheet" type="text/css">
<link href="template.css" rel="stylesheet" type="text/css">
<script src="js/jquery.min.js"></script>
<style>
#form td
{
font-family:Cambria;
size:12px;
}
#matter
{
font-family:Cambria;
size:14px;
}

#report
{
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
widtd:100%;
border-collapse:collapse;
}
#report th, #report td 
{
font-size:1em;
border:1px solid #98bf21;
padding:3px 7px 2px 7px;
text-align:center;
}
#report td 
{
font-size:1.1em;
text-align:left;
padding-top:5px;
padding-bottom:4px;
background-color:#A7C942;
color:#ffffff;
text-align:center;
}
#report tr.alt td 
{
color:#000000;
background-color:#EAF2D3;
}
</style>

</head>
<body bgcolor="#333333">
<div class="page">
<div class="up">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="kogo 9.png">
</div>
<div class="bottom" style="height:450px;">
 <div id="cssmenu">
   <ul>
   <li><a href='home.php'><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
   </li>
   <li class='has-sub'><a href='#'><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Event&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
   <ul>
   <li><a href='#'><span>&nbsp;&nbsp;&nbsp;&nbsp;Add Event&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   <li><a href='#'><span>&nbsp;&nbsp;&nbsp;&nbsp;Update Event&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   </ul>
   </li>
   <li class='has-sub'><a href='#'><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Artist&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
   <ul>
   <li><a href='#'><span>&nbsp;&nbsp;&nbsp;&nbsp;Add Artist&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   <li><a href='#'><span>&nbsp;&nbsp;&nbsp;&nbsp;Update Artist&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   </ul>
   </li>
   <li class='has-sub'><a href='#'><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Band&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
   <ul>
   <li><a href='#'><span>&nbsp;&nbsp;&nbsp;&nbsp;Add Band&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   <li><a href='#'><span>&nbsp;&nbsp;&nbsp;&nbsp;Update Band&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   </ul>
   </li>
   <li class='has-sub'><a href='#'><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vendor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
   <ul>
   <li><a href='addvendor.php'><span>&nbsp;&nbsp;&nbsp;&nbsp;Add Vendor&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   <li><a href='searchvendor.php'><span>&nbsp;&nbsp;&nbsp;&nbsp;Update Vendor&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   <li><a href='viewvendors.php'><span>&nbsp;&nbsp;&nbsp;&nbsp;View Vendors&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   </ul>
   </li>

</ul>
 </div>
 <div id="matter">
 <br/>
 <br/>
 <center>

<div class="ex" style="margin-left:225px;width:500px;float:left">
   <div class="heading">
   &nbsp;&nbsp;<b>Add Vendors</b>
   </div>
   <form name="f2" method="post" action="event_vendor.php">
    <table id="form" border="0" align="center">
		<tr><td></td></tr>
		<tr><td>Vendors:</td>
		<?php 
	    $result=mysql_query("select vendor_id,name from vendor");
	    ?>
		<?php
		$i=0;
		while($row=mysql_fetch_row($result))
		{
		if($i==0)
		{
		?>
		<td><input type="checkbox"  autocomplete="off" name="vendor[]" value="<? echo $row[0];?>"><?php echo $row[1]; ?></td></tr>
		<?php
		}
		else
		{
		?>
		<tr><td></td><td><input type="checkbox" autocomplete="off" name="vendor[]" value="<? echo $row[0];?>"><?php echo $row[1]; ?></td></tr>
		<?php
		}
		$i++;
		}
		?>
		</tr>
		<tr><td></td><td><input type="submit" value="Assign Vendors"></td></tr>
	</table>
   </form>
 </div>
 </div>
  
 