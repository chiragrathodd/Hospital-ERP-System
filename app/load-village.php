<?php
session_start();
error_reporting(0);
$conn = mysqli_connect("localhost","hospital_jnd","Master@2619","hospital_jnd") or die("Connection failed");

if($_POST['type'] == ""){
	$sql = "SELECT * FROM country_tb";

	$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

	$str = "";
	while($row = mysqli_fetch_array($query)){
		$str .= "<option value='{$row[0]}'>{$row[1]}</option>";
	}
}else if($_POST['type'] == "stateData"){

	$sql = "SELECT * FROM state_tb WHERE country = {$_POST['id']}";

	$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

	$str = "";
	while($row = mysqli_fetch_array($query)){
		$str .= "<option value='{$row[0]}'>{$row[1]}</option>";
	}
}

echo $str;
?>
