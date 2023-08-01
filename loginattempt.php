<!DOCTYPE html>
<html>
<head profile="http://www.w3.org/2005/10/profile">
<link rel="icon" 
      type="image/gif" 
      href="icon 2.gif">
<link href="template.css" rel="stylesheet" type="text/css">
<script src="js/jquery.min.js"></script>
<script>
$(document).ready(function() {
var msg="";
var elements = document.getElementsByTagName("INPUT");
for (var i = 0; i < elements.length; i++) {
   elements[i].oninvalid =function(e) {
        if (!e.target.validity.valid) {
        switch(e.target.id){
           case 'id':
			e.target.setCustomValidity("Invalid ID");break;
		    case 'password' : 
            e.target.setCustomValidity("Please enter password");break;
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
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="kogo 9.png">
   </div>
   <div class="bottom" style="height:382px;">
   <form name="f1" method="post" action="login_check.php">
   </br>
   </br>
   </br>

   
   <div class="ex" style="width:375px">
   <div class="heading">
   &nbsp;&nbsp;<b>LOGIN</b>
   </div>
   </br>
   <center>
   <table border="0">
   <tr>
   <td><label style="font-family:Cambria;size:12"> ID:&nbsp;</label></td>
   <td> <input class="textbox" type="text" name="id" id="id" placeholder="cm1234" autofocus="off" required pattern="^cm\d{4}$"></td>
   </tr>
   <tr>
   <td><label style="font-family:Cambria;size:12">Password:</label></td>
   <td><input class="textbox" type="password" name="password" id="password" placeholder="*********" required /></td>
   </tr>
   </table>
   </br>
   <input type="submit" name="Login" value="Login">
   </center>
   <center>Invalid username or password</center>
   </form>
   
   </div>
   </div>
  
</div>


</body>
</html>