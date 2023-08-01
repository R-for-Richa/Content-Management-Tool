<?php
session_start();

$_SESSION['bl_fname']=$_POST['bl_fname'];
$_SESSION['bl_lname']=$_POST['bl_lname'];
$_SESSION['bl_phne']=$_POST['bl_phne'];

?>

<html>
<head>
<link href="styles.css" rel="stylesheet" type="text/css">
<link href="template.css" rel="stylesheet" type="text/css">

<script src="js/jquery.min.js"></script>
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
<script>
	 	  
	  
	 $(document).ready(function(){ 
	  $("#ok").click(function () {
	  $('#custom1').remove();
      $count=$('#mem_count').val();
	  
	  if($count>0 && $count<6)
	  {
	  $i=0;
	  $('#custom').append('<div id="custom1"></div>');
	  while($count)
	  {
	  $i++;
	  $('#custom1').append('<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;member'+$i+' name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mem'+$i+'" required></td></tr>');
	  $count--;
	  }
	  }
	  else
	  {
	  alert("Only five more members can be added");
	  }
	  
     });
	 });
	 
	 


</script>



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
 <div id="content">
	<form name="f1" method ="post" action="bandsuccess.php">
	<div class="ex" style="margin:80px 250px ;">
    <div class="heading">
    &nbsp;&nbsp;<b>BAND MEMBERS</b>
    </div>
    <table border="0" align="center">
	<tr><td>No. of Remaining Members:</td><td><input type="text" id="mem_count" name="mem_count" required><input type="button" id="ok" value="ok"></td></tr>
	<tr><td colspan="2"><div id="custom"></div></tr>
	<tr><td></td><td><input type="submit" id="continue" value="Continue"></td><tr>
    </table>
    </form>
    </div>

 </div>

</body>
</html>



  

