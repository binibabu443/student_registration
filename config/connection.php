<!---connectiion p0age---age--->

<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="srs";
	$conn=new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error)
	{
		die("connection failed".$conn->connect_error);
	}