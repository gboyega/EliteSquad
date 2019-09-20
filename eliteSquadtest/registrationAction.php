<?php
	include "includes/db.php";
	$error = "";
	if(isset($_POST['submit'])){
		$firstName = 	mysqli_real_escape_string($con,$_POST['firstName']);
		$lastName =  	mysqli_real_escape_string($con,	$_POST['lastName']);
		$email 	=     	mysqli_real_escape_string($con,	$_POST['email']);
		$password =  	mysqli_real_escape_string($con,	$_POST['password']);
		$confirmPassword = mysqli_real_escape_string($con, $_POST['confirmPassword']);

		if($password === $confirmPassword){
			$password = password_hash($password, PASSWORD_DEFAULT);

			$query = "INSERT INTO users (first_name, last_name, email, password) VALUES('$firstName','$lastName','$email','$password')";

				//checks if it didnt insert
				if (!mysqli_query($con,$query)) {
					die('Error:' .mysqli_error($con));
				}	
		}else{
			$error ="Please fill in the fields correctly";
		}	
	}
?>