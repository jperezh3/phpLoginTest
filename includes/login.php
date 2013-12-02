<?php 
	include "connect.php";
	$tableName = "users";
	$user = $_POST['username'];
	$pass = $_POST['password'];
	//To check which button was pressed
	$button = $_POST['loginButton'];
	
	//If login button was press check if the user is register
	if($button == "Login"){
		$query = "SELECT user_user FROM ".$tableName." WHERE user_user =
			'".$user."' AND user_pass = '".$pass."';";
		echo $query.'<br>';
		$result = mysqli_query($con, $query);	
		$row = mysqli_fetch_row($result);
		if($row == null){
			echo "The username or password you entered is incorrect";
		}else {
			header("Location: ../main.html");
		}
	//In this case, if register button was pressed send to another page
	}else if($button == "Register"){
		header("Location: register.html");
	}
 ?>