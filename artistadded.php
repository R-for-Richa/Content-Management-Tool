<?php
	require_once("connection.php");
if(isset($_GET['id']))
 {
 
	$id= mysql_real_escape_string($_GET['id']);
	$query=mysql_query("select * from artist where artist_id=$id");
	$row = mysql_fetch_array($query);
}
?>
<html>
<head>
<head profile="http://www.w3.org/2005/10/profile">
<link rel="icon" 
      type="image/gif" 
      href="icon 2.gif">
<link href="styles.css" rel="stylesheet" type="text/css">
<link href="template.css" rel="stylesheet" type="text/css">
<style>
#form td
{
font-family:Cambria;
size:12px;
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
 <div class="bottom" style="height:600px;">
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
 <center><h2>Artist Details</h2>
 <form action="staffhome.php">
 <table>
 <tr><td style="text-align:center"><form enctype="multipart/form-data"><img src="imgup2.php?id=<?php echo $row[0];?> height="150" width="150"></form></td></tr>
 <tr><td>
	<table>
<?php



	echo "<tr><td>Name</td><td>".$row[1]."</td></tr>";
	?>
	<script>alert(<?php echo $row[1];?>);</script>
	<?php
	echo "<tr><td>Office Phone:</td><td>".$row[7]."</td></tr>";
	echo "<tr><td>Cell Phone:</td><td>".$row[8]."</td></tr>";
	echo "<tr><td>Email:</td><td>".$row[6]."</td></tr>";
	echo "<tr><td rowspan=\"4\">Address</td><td>".$row[2]."</td></tr>";
	echo "<tr><td>".$row[11]."</td></tr>";
	echo "<tr><td>".$row[12]."</td></tr>";
	echo "<tr><td>".$row[13]."</td></tr>";
	
	echo "<tr><td>Agent Name</td><td>".$row[0]."</td></tr>";
	
	echo "<tr><td>Concert Rate per Event:</td><td>".$row[4]."</td></tr>";
	
		//$q=mysql_query("select * from agent where agent_id=$row[5]");
		//$r=mysql_fetch_array($q);
		
	
 
?>
	</table>
</td></tr>

</table>
<input type="submit" value="Ok">
</center>
</div>
</div>
</body>
</html>