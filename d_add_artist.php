<?php
	require_once("connection.php");
	
	$ar_name=$_POST['ar_name'];
	$ar_addr=$_POST['ar_addr']."<br/>".$_POST['ar_city']."<br/>".$_POST['ar_state']."<br/>".$_POST['ar_zip'];
	$ar_ophne=$_POST['ar_ophne'];
	$ar_cphne=$_POST['ar_cphne'];
	
	$a_name=$_POST['a_name'];
	$a_addr=$_POST['a_addr']."<br/>".$_POST['a_city']."<br/>".$_POST['a_state']."<br/>".$_POST['a_zip'];
	$a_ophne=$_POST['a_ophne'];
	$a_cphne=$_POST['a_cphne'];
		
	
	$imageName = mysql_real_escape_string($_FILES["ar_logo"]["name"]);
	$imageData = mysql_real_escape_string(file_get_contents($_FILES["ar_logo"]["tmp_name"]));
	
	$imageType=mysql_real_escape_string($_FILES["ar_logo"]["type"]);
	
	if(substr($imageType,0,5) == "image")
	{
		mysql_query("update artist set logo='$imageData' where artist_id=1");
		echo "Image uploaded";
	}
	else
	{
		echo "Only images are allowed";
	}
?>