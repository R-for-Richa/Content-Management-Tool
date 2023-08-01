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
<script type="text/javascript">  
$(document).ready(function() {
var msg="";
var elements = document.getElementsByTagName("INPUT");
for (var i = 0; i < elements.length; i++) {
   elements[i].oninvalid =function(e) {
        if (!e.target.validity.valid) {
        switch(e.target.id){
           case 'dynamic':
			e.target.setCustomValidity("Please specify other category");break;
		    case 'name' : 
            e.target.setCustomValidity("Name of the Vendor cannot be blank");break;
            case 'moneyperevent' : 
            e.target.setCustomValidity("Money per event cannot be blank");break;
			case 'officephone':
			e.target.setCustomValidity("Please fill out 10 digit office phone number");break;
			case 'cellphone':
			e.target.setCustomValidity("Please fill out 10 digit cell phone number");break;
            default : e.target.setCustomValidity("");break;
        }
       }
    };
   elements[i].oninput = function(e) {
        e.target.setCustomValidity(msg);
    };
} 
});

  $(document).ready(function() {
  $('#other').change(function () {
  if ($('#other').is(':checked'))
  {
   $flag=1;
   $('#custom').append('<div id="custom1"><input type="text" placeholder="Please Specify" name="dynamic" id="dynamic" required></div>');
   }
   else
   {
   $flag=2;
    $('#custom1').remove();
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
 <div class="bottom" style="height:650px;">
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
<div class="ex" style="margin-left:225px;width:500px;float:left">
   <div class="heading">
   &nbsp;&nbsp;<b>Add Vendor</b>
   </div>
   <form name="f1" id="f1" method="post" action="vendorsuccess.php">
    <table id="form" border="0" align="center">
		<tr><td></td></tr>
		<tr><td>Name:</td><td><input type="text" name="name" autocomplete="off" id="name" autofocus required></td></tr>
		<tr><td>Type of Category:</td>
		<?php 
	    $result=mysql_query("select * from category");
	    ?>
		<?php
		$i=0;
		while($row=mysql_fetch_row($result))
		{
		if($i==0)
		{
		?>
		<td><input type="checkbox" class="group-required" autocomplete="off" name="category[]" value="<? echo $row[0];?>"><?php echo $row[1]; ?></td></tr>
		<?php
		}
		else
		{
		?>
		<tr><td></td><td><input type="checkbox" class="group-required" autocomplete="off" name="category[]" value="<? echo $row[0];?>"><?php echo $row[1]; ?></td></tr>
		<?php
		}
		$i++;
		}
		?>
		<tr><td></td><td><input type="checkbox" autocomplete="off" name="category[]" id="other" value="other">Other</center></td></tr>
		<tr><td></td><td><div id="custom"></div></td></tr>
		<tr><td>Office Phone:</td><td><input type="text" name="officephone" id="officephone" autocomplete="off" size="8" required pattern="^\d{10}$" oninvalid="setCustomValidity('Please give 10 digit phone number')" /></td></tr>
		<tr><td>Cell Phone:</td><td><input type="text" name="cellphone" id="cellphone" size="8" autocomplete="off"  required pattern="^\d{10}$" oninvalid="setCustomValidity('Please give 10 digit phone number')" /></td></tr>
		<tr><td>Money per Event:</td><td><input type="text" autocomplete="off" name="moneyperevent" id="moneyperevent" size="4" required/>$</td></tr>
		<tr></tr>
		<tr></tr>
		<tr><td></td><td><input type="submit" name="add" value="Add" id="add"></td></tr>
	</table>
   </form>
 </div>
 </div>
</body>
</html>