<?php
$page = $_GET['page'];
$id = $_GET['id'];
include("../databases/config.php");
if($page=="symtoms")
{
	$b = "delete from symptoms_list where id='$id' ";
	$g = mysqli_query($q,$b);
	if($g)
	{
		echo "<script>window.location='Symtoms';</script>";
	}
}
else if($page=="user")
{
	$b = "delete from user where id='$id' ";
	$g = mysqli_query($q,$b);
	if($g)
	{
		echo "<script>window.location='user';</script>";
	}
}
else if($page=="idsp")
{
	$b = "delete from idsp_list where id='$id' ";
	$g = mysqli_query($q,$b);
	if($g)
	{
		echo "<script>window.location='Diagnosis';</script>";
	}
}
else if($page=="other_list")
{
	$b = "delete from other_list where id='$id' ";
	$g = mysqli_query($q,$b);
	if($g)
	{
		echo "<script>window.location='other_list';</script>";
	}
}
else if($page=="Madicine_list")
{
	$b = "delete from madicine_list where id='$id' ";
	$g = mysqli_query($q,$b);
	if($g)
	{
		echo "<script>window.location='Madicine';</script>";
	}
}
else if($page=="registration_page")
{
	$b = "delete from registration where id='$id' ";
	$g = mysqli_query($q,$b);
	if($g)
	{
		echo "<script>window.location='Ragistration';</script>";
	}
}
else if($page=="ipdlist")
{
	$b = "delete from ipd where id='$id' ";
	$g = mysqli_query($q,$b);
	if($g)
	{
		echo "<script>window.location='ipd';</script>";
	}
}
else if($page=="patientlist")
{
	$b = "delete from patient where id='$id' ";
	$g = mysqli_query($q,$b);
	if($g)
	{
		echo "<script>window.location='Patient';</script>";
	}
}
else if($page=="consult_registration")
{
	$b = "delete from consultation where id='$id' ";
	$g = mysqli_query($q,$b);
	if($g)
	{
		echo "<script>window.location='consult_registration';</script>";
	}
}
else if($page=="user_hwclist")
{
	$b = "delete from country_tb where cid='$id' ";
	$g = mysqli_query($q,$b);
	if($g)
	{
		echo "<script>window.location='user_hwclist';</script>";
	}
}
else if($page=="user_villagelist")
{
	$b = "delete from state_tb where sid='$id' ";
	$g = mysqli_query($q,$b);
	if($g)
	{
		echo "<script>window.location='user_villagelist';</script>";
	}
}
else if($page=="user_departmentlist")
{
	$b = "delete from deptlist where id='$id' ";
	$g = mysqli_query($q,$b);
	if($g)
	{
		echo "<script>window.location='user_departmentlist';</script>";
	}
}
else if($page=="wherelist")
{
	$b = "delete from cwhere where id='$id' ";
	$g = mysqli_query($q,$b);
	if($g)
	{
		echo "<script>window.location='where';</script>";
	}
}
else if($page=="Treatmentlist")
{
	$b = "delete from Add_Treatment where id='$id' ";
	$g = mysqli_query($q,$b);
	if($g)
	{
		echo "<script>window.location='Treatment';</script>";
	}
}
?>