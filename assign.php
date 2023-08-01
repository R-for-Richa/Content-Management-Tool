<?php
session_start();
require_once('connection.php');
$eventname=$_POST['name'];
$_SESSION['eventname']=$eventname;
$location=$_POST['location'];
$_SESSION['location']=$location;
$date=$_POST['date'];
$_SESSION['date']=$date;
$time=$_POST['time'];
$_SESSION['time']=$time;
$seating=$_POST['seating'];
$_SESSION['seating']=$seating;
$managerid=$_POST['manager'];
$_SESSION['managerid']=$managerid;
$description=$_POST['description'];
$_SESSION['description']=$description;
?>
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
body
{
height:auto;
}
#form td
{
font-family:Cambria;
size:12px;
}
</style>

<script>

 $(document).ready(function() {
  $('.type').change(function () {
  if ($('#band').is(':checked'))
  {
  $('#artist_radio').hide();
   $('#band_radio').show();
   }
   else
   {
   $('#band_radio').css('display','none');
   $('#artist_radio').css('display','block');
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
 <div class="bottom" style="height:450px;">
 <div id="cssmenu">
   <ul>
   <li><a href='staffhome.php'><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
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
   <li><a href='searchvendor.php'><span>&nbsp;&nbsp;&nbsp;&nbsp;Search Vendor&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   <li><a href='viewvendors.php'><span>&nbsp;&nbsp;&nbsp;&nbsp;View Vendors&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   </ul>
   </li>
</ul>
</div>
</br>
</br>
</br>
</br>
<div class="ex" style="margin-left:305px;width:350px;float:left">
   <div class="heading">
   &nbsp;&nbsp;<b>Assign Band/Artist</b>
   </div>
   <form name="f1" id="f1" method="post" action="assignevent.php">
    <table id="form" border="0" align="center">
		<tr><td>Event Type:</td><td><input type="radio" id="band" class="type" name="type" value="1">Band</td></tr>
		<tr><td></td><td><input type="radio" name="type" id="artist" class="type" value="2">Artist</td></tr>
		<tr><td colspan="2"><div id="band_radio" style="display:none;">
		Band Name:<select name="band">
        <?php 
        $result=mysql_query("select * from band");
        while($row=mysql_fetch_row($result))
        {
		?>
 		<option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
		<?php
        }	
        ?>
        </div></td></tr>
        <tr><td colspan="2"><div id="artist_radio" style="display:none">
		Artist Name:<select name="artist">
        <?php 
        $result=mysql_query("select * from artist");
        while($row=mysql_fetch_row($result))
        {
		?>
 		<option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
        <?php
		}
        ?></td></tr>		
        </div>		
		<tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="assign" value="Assign" id="assign"></td></tr>
	</table>
   </form>
 </div>
 </div>
</body>
</html>