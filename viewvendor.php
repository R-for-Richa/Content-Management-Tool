<?php
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
<div class="bottom" style="height:450px;">
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
 </div> <div id="matter">
 <br/>
 <br/>
 <center>
</div>
<br>

<div class="ex" style="margin-left:225px;width:500px;float:left">
   <div class="heading">
   &nbsp;&nbsp;<b>Vendor Details</b>
   </div>
    <table id="form" border="0" align="center">
		<tr><td></td></tr>
		<?php
        $vid=$_GET["vendorid"];
		session_start();
		$_SESSION['vid']=$vid;
        $result4=mysql_query("select * from vendor where vendor_id='$vid'");
        $row=mysql_fetch_row($result4);
        ?>
		<tr><td>Name:</td><td><?php echo $row[1]; ?></td></tr>
		<tr><td>Category:</td><td>
		<?php
		$result5=mysql_query("select categoryid from vendor_category where vendorid='$vid'");
		while($row1=mysql_fetch_row($result5))
		{
		 $result3=mysql_query("select category_name from category where category_id='$row1[0]'");
		 $row3=mysql_fetch_row($result3);
		 echo $row3[0];
         echo ",";		 
		}
		?>
		</td></tr>
		<tr><td>Office Phone:</td><td><?php echo $row[2];?></td></tr>
		<tr><td>Cell Phone:</td><td><?php echo $row[3];?></td></tr>
		<tr><td>Money per Event:</td><td><?php echo $row[4];?></td></tr>
		<tr></tr>
		<tr></tr>
		<tr><td></td><td><input type="button" name="assign" id="assign" value="Assign to an Event"><input type="button" id="update" name="update" value="Update details"></td></tr>
	</table>
   </form>
 </div>
 </div>






</center>
</div>
</body>
</html>