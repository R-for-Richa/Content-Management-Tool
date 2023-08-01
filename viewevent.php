<?php
session_start();
require_once('connection.php');
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

}
#report td 
{
font-size:1.1em;
text-align:left;
padding-top:5px;
padding-bottom:4px;
background-color:#A7C942;
color:#ffffff;

}
#report tr.alt td 
{
color:#000000;
background-color:#EAF2D3;
}
</style>
<script>
$(document).ready(function(){
$('#assign').click(function() {
    window.location.href = 'http://students.cs.niu.edu/~cs56712/assignvendor.php';
    return false;
});
});
$(document).ready(function(){
$('#update').click(function() {
    window.location.href = 'http://students.cs.niu.edu/~cs56712/updatevendor.php';
    return false;
});
});

</script>



</head>
<body bgcolor="#333333">
<div class="page">
<div class="up">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="kogo 9.png">
</div>
<div class="bottom" style="height:750px;">
 <div id="cssmenu">
  <ul>
   <li><a href='staffhome.php'><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
   </li>
   <li class='has-sub'><a href='#'><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Event&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
   <ul>
   <li><a href='addevent.php'><span>&nbsp;&nbsp;&nbsp;&nbsp;Add Event&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   <li><a href='#'><span>&nbsp;&nbsp;&nbsp;&nbsp;Update Event&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   </ul>
   </li>
   <li class='has-sub'><a href='#'><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Artist&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
   <ul>
   <li><a href='addartist.php'><span>&nbsp;&nbsp;&nbsp;&nbsp;Add Artist&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   <li><a href='#'><span>&nbsp;&nbsp;&nbsp;&nbsp;Update Artist&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   </ul>
   </li>
   <li class='has-sub'><a href='#'><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Band&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
   <ul>
   <li><a href='add_band.php'><span>&nbsp;&nbsp;&nbsp;&nbsp;Add Band&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   <li><a href='#'><span>&nbsp;&nbsp;&nbsp;&nbsp;Update Band&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   </ul>
   </li>
   <li class='has-sub'><a href='#'><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vendor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
   <ul>
   <li><a href='addvendor.php'><span>&nbsp;&nbsp;&nbsp;&nbsp;Add Vendor&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   <li><a href='searchvendor.php'><span>&nbsp;&nbsp;&nbsp;&nbsp;Search Vendor&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   <li><a href='searchvendor.php'><span>&nbsp;&nbsp;&nbsp;&nbsp;Update Vendor&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   <li><a href='viewvendors.php'><span>&nbsp;&nbsp;&nbsp;&nbsp;View Vendors&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   </ul>
   </li>
   <li class='has-sub'><a href='#'><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agent&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
   <ul>
   <li><a href='addagent.php'><span>&nbsp;&nbsp;&nbsp;&nbsp;Add Agent&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   </ul>
   </li>
   <li><a href='index.php'><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Logout&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
   </li>
 </ul>
 </div>
<div id="matter">
 <br/>
 <br/>
<br>
<div class="ex" style="margin-left:225px;width:500px;float:left">
   <div class="heading">
   &nbsp;&nbsp;<b>Event Details</b>
   </div>
    <table id="form" border="0" align="center">
	<?php
        $id=$_GET["eventid"];
		$result7=mysql_query("select * from concert where concert_id='$id'");
		$row7=mysql_fetch_row($result7);
		?>
		<tr><td>Name:</td><td><?php echo $row7[8];?></td></tr>
		<tr><td>Location:</td><td><?php echo  $row7[1];?></td></tr>
		<tr><td>Date:</td><td><?php echo  $row7[2];?></td></tr>
		<tr><td>Time:</td><td><?php echo  $row7[3];?></td></tr>
		<tr><td>Seating Capacity:</td><td><?php echo  $row7[5];?></td></tr>
		<tr><td>Description:</td><td><?php echo  $row7[7];?></td></tr>
		<tr><td>Manager:</td><td><?php echo  $row7[6];?></td></tr>
		<tr><td><b>Performers</b></td></tr>
		<?php
		$id=$_SESSION['id'];
		$result=mysql_query("select performerr_id,type from concert_performer where concert_id='$id'");
		$row=mysql_fetch_row($result);
		?>
		<tr><td>Performer Type:</td><td><?php 
		if($row[1]=="band") 
		{
		echo "Band";
		$result2=mysql_query("select band_name from band where band_id='$row[0]'");
		$row2=mysql_fetch_row($result2);
		}
		else
		{
		echo "Artist";
		$result2=mysql_query("select name from artist where artist_id='$row[0]'");
		$row2=mysql_fetch_row($result2);
		}
		?></td></tr>
		<tr><td>Name:</td><td>
		<?php echo $row2[0];?></td></tr>
		<tr><td><b>Vendors</b></td></tr>
		<?php
		$result1=mysql_query("select vendor_id from concert_vendor where concert_id='$id'");
		while($row1=mysql_fetch_row($result1))
		{
        ?>		
		<tr><td><b>
		<?php 
		$result3=mysql_query("select name from vendor where vendor_id='$row1[0]'");
		$row3=mysql_fetch_row($result3);
		echo $row3[0];
		?>
		</b></td></tr>
		<tr><td>
		<?php
		echo "Services :";
		?></td><td>
		<?php
		$result4=mysql_query("select categoryid from vendor_category where vendorid='$row1[0]'");
		while($row4=mysql_fetch_row($result4))
		{
		 $result5=mysql_query("select category_name from category where category_id='$row4[0]'");
		 $row5=mysql_fetch_row($result5);
		 echo $row5[0];
		 echo ",";
		}
		?> </td></tr>
		<?php
		}
		?>
		
	</table>

 </div>
 </div>







</div>
</body>
</html>