<?php
$id =  $_GET['id'];
include("../databases/config.php");
$u = mysqli_query($q,"delete from nursing_station where id='$id' ");
echo "<script>window.location.href='Nurshing.php';</script>";
?>