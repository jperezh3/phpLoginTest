<?php


	$con=mysqli_connect("localhost","root","","phpLoginTestDB");

	if(mysqli_connect_errno()){
		echo "Failed to connect to MySQL: ".mysqli_connect_errno();
	}

	/*$sql = "CREATE TABLE IF NOT EXISTS users(
		user_id			INT(15) PRIMARY KEY NOT NULL AUTO_INCREMENT,
		user_name		VARCHAR(20) NOT NULL,
		user_user		VARCHAR(30) NOT NULL,
		user_pass		VARCHAR(20) NOT NULL,
		user_email		VARCHAR(20) NOT NULL
		)";
	
	mysqli_query($con, $sql) or die (mysqli_error($con));
*/
?>