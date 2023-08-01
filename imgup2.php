<?php
require_once("connection.php");
if(isset($_GET['id']))
 {
	$id= mysql_real_escape_string($_GET['id']);
	$query=mysql_query("select logo from artist where artist_id=$id");
	while($row = mysql_fetch_assoc($query))
	{
		$imageData=$row["logo"];
		
	}
	header("content-type: image/jpg");
	echo $imageData;
 }
?>
