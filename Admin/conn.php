<?php
	$link=mysqli_connect("localhost","root","","art_gallary");
	if(mysqli_connect_error())
	{
		echo "Connection error".mysqli_connect_error();
		exit;
	}
	
?>