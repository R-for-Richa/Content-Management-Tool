<?php
session_start();
if(!isset($_SESSION['id']))
{
 header("Location:index.php");
}
?>


<html>
<head>
<link href="styles.css" rel="stylesheet" type="text/css">
<style>
.page
{
background-color:#E0E0E0 ;
width:900x;
height:auto;
margin-right:auto;
margin-left:auto;
margin-top:40px;
margin-bottom:40px;
}
.up
{
background-color:#FE5A1D;
width:900px;
height:180px;
margin-right:auto;
margin-left:auto;
margin-top:-1px;
-webkit-border-top-left-radius:7px;
	-moz-border-radius-topleft:7px;
	border-top-left-radius:7px;
	-webkit-border-top-right-radius:7px;
	-moz-border-radius-topright:7px;
	
border-bottom:thick solid #ff0000;
}
.bottom
{

background-color:#FFFFFF;
width:900px;
height:auto;
margin-right:auto;
margin-left:auto;
margin-bottom:40px;
	-webkit-border-bottom-right-radius:7px;
	-moz-border-radius-bottomright:7px;
	border-bottom-right-radius:7px;
	-webkit-border-bottom-left-radius:7px;
	-moz-border-radius-bottomleft:7px;
	border-bottom-left-radius:7px;
}

table{ 
    border-spacing:2px;
    cellpadding:10;
}
#report
{
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
width:100%;
border-collapse:collapse;
}
#report td, #report th 
{
font-size:1em;
border:1px solid #98bf21;
padding:3px 7px 2px 7px;
text-align:center;
}
#report th 
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
<body bgcolor="#E0E0E0">
<div class="page">
<div class="up">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="kogo 9.png">
</div>

<div class="bottom">
<div id="cssmenu">
   <ul>
  
   <li><a href="report.html"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
   </li>
   <li><a href="logout1.php"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Logout&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
   </li>

   </ul>
</div>   
<center><h3>Weekly Summary Report, Week #34</h3></center>
 <table cellpadding="8" id="report" border="0">
<tr><th>Category</th><th>Name</th><th>Tickets Sold</th><th>Profit</th></tr>
<tr><th>Advertised</th>

<td>Roars</td>
<td>41/200</td>
<td>246$</td></tr>
<tr><td></td><td></td><td></td><td> </td></tr>
<tr><td></td>

<td>Canes Festival</td>
<td>91/200</td>
<td>274$</td></tr>
<tr><td></td><td></td><td></td><td> </td></tr>
<tr><td></td>

<td>Musical Prodigy</td>
<td>57/200</td>
<td>173$</td></tr>
<tr><td></td><td></td><td></td><td> </td></tr>
<tr><td></td>

<td>Musical Night 2k13</td>
<td>13/200</td><td>127$</td></tr>
<tr><td></td><td></td><td></td><td> </td></tr>
<tr><td></td>

<td>IL Talents</td>
<td>7/200</td><td>80$</td></tr>
<tr><td></td><td></td><td></td><td> </td></tr>

<tr><th>Sold out</th>
<td>Rockon</td>
<td>180/180</td>
<td>500$</td></tr>
<tr><td></td><td></td><td></td><td> </td></tr>
<tr><td></td>
<td>Fliers</td>
</td><td>200/200</td><td>1550$</td></tr>
<tr><td></td><td></td><td></td><td> </td></tr>
<tr><td></td>
<td>MaxRage</td>
<td>150/150</td>
<td>350$</td></tr>
<tr><td></td><td></td><td></td><td> </td></tr>
<tr><td></td>
<td>Bombers</td>
<td>300/300</td>
<td>358$</td></tr>
<tr><td></td><td></td><td></td><td> </td></tr>

<tr><th>Cancelled</th>
<td>Fosters</td>
<td>99/180</td>
<td>80$</td></tr>
<tr><td></td><td></td><td></td><td> </td></tr>
<tr><td>
</td><td>Halloween Bash</td>
<td>6/200</td><td>37$</td></tr>
<tr><td></td><td></td><td></td><td> </td></tr>
<td></td><td>New eve Concert</td>
<td>8/200</td><td>40$</td></tr>
<tr><td></td><td></td><td></td><td> </td></tr>
<td></td><td>Holla Holla</td>
<td>10/200</td><td>100$</td></tr>
<tr><td></td><td></td><td></td><td> </td></tr>
<td></td><td>Akon Musical</td>
<td>5/150</td><td>25$</td></tr>
<tr><td></td><td></td><td></td><td> </td></tr>
<td></td><td>Colors of Music</td>
<td>5/300</td><td>20$</td></tr>
<tr><td></td><td></td><td></td><td> </td></tr>
<td></td><td>Bang the Beat</td>
<td>33/200</td><td>198$</td></tr>

</table>
<center>
<form action="report.php">
<input type="submit" value="VIew Graphical Report">
</form>
</center>

</div>
</div>
</body>
</html>
