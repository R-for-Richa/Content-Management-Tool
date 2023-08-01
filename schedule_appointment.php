<!DOCTYPE html>
<html>
<head>
		<link href="template.css" rel="stylesheet" type="text/css">
		<link href="styles.css" rel="stylesheet" type="text/css">


    <link href="styles/kendo.common.min.css" rel="stylesheet">
    <link href="styles/kendo.default.min.css" rel="stylesheet">
	
		<script src="js/console.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/kendo.web.min.js"></script>
		
		
<style>

#av1 td{ text-align:center;}
#av2 td{text-align:center;}


</style>
</head>

<body bgcolor="#333333">
<div class="page">
   <div class="up">
	
   </div>
   <div class="bottom">
   <div id="cssmenu">
   <ul>
   <li><a href='#'><span>&nbsp;&nbsp;Schedule an appointment&nbsp;&nbsp;</span></a>
   </li>
   <li><a href='#'><span>&nbsp;&nbsp;View therapist availability&nbsp;&nbsp;</span></a>
     
   </li>
   <li><a href='#'><span>&nbsp;&nbsp;New appointment&nbsp;&nbsp;</span></a></li>
   <li class='has-sub'><a href='#'><span>&nbsp;&nbsp;Search an appointment&nbsp;&nbsp;</span></a>
      <ul>
	       <li><a href='#'><span>Search by date</span></a></li>
		     <li><a href='#'><span>Search by customer ID</span></a></li>
		</ul>
   </li>
</ul>
 </div>
   <form name="f1" method="post">
   </br>
   </br>
   </br>

   
   <div class="ex"  style="margin-left:120px;margin-right:120px">
   <div class="heading">
   &nbsp;&nbsp;<b>SET APPOINTMENT</b>
   </div>
   </br>
   <table class="toptable" border="0">
   <tr>
   <td><label style="font-family:Cambria"> Patient Name:&nbsp;</label></td>
   <td> <input class="textbox" type="text" name="id" placeholder="Joe" required pattern="^[A-Z][a-z]$"/></td>
   </tr>
   <tr>
   <td><label style="font-family:Cambria;size:12">Therapist:</label></td>
   <td><select name="therapist" id="therapist">
				<option value="" >--Select--</option>
				<option value="1" >Therapist 1</option>
				<option value="2" >Therapist 2</option>
				<option value="3" >Therapist 3</option>
				<option value="4" >Therapist 4</option>
				<option value="5" >Therapist 5</option>
				<option value="6" >Therapist 6</option>
				<option value="7" >Therapist 7</option>
				<option value="8" >Therapist 8</option>
				<option value="9" >Therapist 9</option>
				<option value="10" >Therapist 10</option>
			</select>	
   </td>
   </tr>
      <tr>
   <td><label style="font-family:Cambria;size:12">Date:</label></td>
   <td><input id="datepicker"/></td>
   </tr>
   <tr>
   <td><span id="showDate" style="display:none"><label style="font-family:Cambria;size:12">..On..Selected Date..:</label></span></td>
   </tr>
   <tr>
    
		<table id="av1" border="1px" style="display:none">
		
		<thead>
			<tr><th>7:00 - 7:30</th><th>7:30 - 8:00</th>
			<th>8:00 - 8:30</th><th>8:30 - 9:00</th>
			<th>9:00 - 9:30</th><th>&nbsp;9:30 - 10:00</th>
			<th>10:00 - 10:30</th><th>10:30 - 11:00</th>
			<th>11:00 - 11:30</th><th>11:30 - 12:00</th>
			<th>12:00 - 12:30</th><th>12:30 - &nbsp;1:00</th></tr>
		</thead>	
		<tr>
			<td>A</td> <td>A</td> <td>NA</td> <td>A</td> <td>NA</td> <td>NA</td> <td>NA</td> <td>A</td> <td>A</td> <td>A</td> <td>A</td> <td>A</td>
		</tr>
		</span>
		</table>
	 
	</tr>
	<tr><br/></tr>
	<tr>
	 	<table id="av2" border="1px" style="display:none">
		<thead>	
			<tr><th>2:00 - 2:30</th><th>2:30 - 3:00</th>
			<th>3:00 - 3:30</th><th>3:30 - 4:00</th>
			<th>4:00 - 4:30</th><th>4:30 - 5:00</th>
			<th>5:00 - 5:30</th><th>5:30 - 6:00</th>
			<th>6:00 - 6:30</th><th>6:30 - 7:00</th></tr>
		</thead>
		<tr>
			<td>NA</td> <td>A</td> <td>A</td> <td>A</td> <td>A</td> <td>A</td> <td>A</td> <td>NA</td> <td>NA</td> <td>NA</td> 
		</tr>
	
	</table>	
   </tr>
  </table>
   </br>
   <input type="submit" name="save" value="Save" class="buttons">
   </form>
   
   </div>
   <br/>
   <br/><br/>
   </div>
  
</div>
<script>
$(document).ready(
		    function () {
				
				$("#therapist").change(function () {
					$("#showDate").show();
				    $("#av1").show();
					$("#av2").show();
					});
            $("#datepicker").kendoDatePicker({
                        change: onChange
                    });
					
			 function onChange() {
                        alert(kendo.toString(this.value(), 'd'));
                    }
        });
    
</script>

</body>
</html>