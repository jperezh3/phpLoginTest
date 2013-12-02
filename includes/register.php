<?php 
	include "connect.php";
	$tableRegister = "users";

	$name  = $_POST['registerName'];
	$user  = $_POST['registerUsername'];
	$pass  = $_POST['registerPassword'];
	$pass2 = $_POST['registerPassword2'];
	$email = $_POST['registerEmail'];

	$queryRegister = "INSERT INTO ".$tableRegister." VALUES ( null, 
		'".$name."', '".$user."', '".$pass."', '".$email."');";	

	mysqli_query($con, $queryRegister) or die (mysqli_error($con));
?>