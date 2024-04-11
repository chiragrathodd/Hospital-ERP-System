<?php
	$hostname="localhost";
	$username="hospital_jnd";
	$password="Master@2619";
	$databasename="hospital_jnd";
	$q= new mysqli($hostname,$username,$password,$databasename);
	if(!$q)
	{
		 echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	}
?>