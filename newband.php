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
</style>
<script type="text/javascript">
function submit()
{
document.f1.submit();
}
$(document).ready(function() {

var msg="";
var elements = document.getElementsByTagName("INPUT");

for (var i = 0; i < elements.length; i++) {
   elements[i].oninvalid =function(e) {
        if (!e.target.validity.valid) {
        switch(e.target.id){
		    case 'bandname' : 
            e.target.setCustomValidity("Name of the band cannot be blank");break;
            case 'agentname' : 
            e.target.setCustomValidity("Name of the Agent cannot be blank");break;
            case 'leadername' : 
            e.target.setCustomValidity("Name of the leader cannot be blank");break;
			case 'rateperevent' : 
            e.target.setCustomValidity("rate per event cannot be blank");break;
			        default : e.target.setCustomValidity("");break;
        }
       }
    };
   elements[i].oninput = function(e) {
        e.target.setCustomValidity(msg);
    };
} 
  });	 
</script>
</head>
<body bgcolor="#333333">
<div class="page">
<div class="up">
</div>
<div class="bottom" style="height:600px;">
 <div class="bottom" style="height:600px;">
 <div id="cssmenu">
   <ul>
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
   <li><a href='#'><span>&nbsp;&nbsp;&nbsp;&nbsp;Add Vendor&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   <li><a href='#'><span>&nbsp;&nbsp;&nbsp;&nbsp;Update Vendor&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
   </ul>
   </li>
   
</ul>
</div>
<div class="ex" style="margin-left:225px;width:500px;float:left">
   <div class="heading">
   &nbsp;&nbsp;<b>Add Band</b>
   </div>
   <form name="f1" method="post" action='#'>
    <table id="form" border="0" align="center">
		<tr><td></td></tr>
		<tr><td>Band Name:</td><td><input type="text" name="bandname" id="bandname" required></td></tr>
		<tr><td>Agent Name:</td><td><input type="text" name="agentname" id="agentname" required/></td></tr>
		<tr><td>Leader Name:</td><td><input type="text" name="leadername" id="leadername" required></td></tr>
		<tr><td>Rate per Event:</td><td><input type="text" name="rateperevent" id="rateperevent" size="4" required></td></tr>
		<tr></tr>
		<tr></tr>
		<tr><td></td><td><input type="button" name="add" value="Add" onclick="submit()"></td></tr>
	</table>
   </form>
 </div>
</body>
</html>