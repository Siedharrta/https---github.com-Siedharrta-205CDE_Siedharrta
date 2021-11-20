<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "photobooth";

	if(!$con = mysqli_connect($host,$user,$password,$database))
	{
		die("Connection Failed");
	}
?>