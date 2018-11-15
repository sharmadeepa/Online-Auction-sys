<?php
include_once("connection.php");
echo"ok";
if(isset($_post['submit']))
{
	echo"okk";
	$Firstname=$_post['Firstname'];
	$Lastname=$_post['Lastname'];
	$Contactno.=$_post['Contactno.'];
	$Address=$_post['Address'];
	$Email=$_post['Email'];
	$Username=$_post['Username'];
	$Password=$_post['Password'];
	
	$sql = "INSERT INTO users(Firstname, Lastname, Contactno., Address, Email, Username, Password)
	VALUES('$Firstname','$Lastname','$Contactno.','$Address','$Email','$Username','$Password')";
	$result =mysqli_query($conn,$sql);
	if($result)
	{
		echo"<script>alert('Register Successful');</script>";
		echo"<script>window.location='index.php';</script>";
	}
	else
	{
		echo"<script>alert('Register Failed');</script>";
		echo"<script>window.location='register.php';</script>";
	}
}
?>