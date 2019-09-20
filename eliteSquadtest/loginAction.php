<?php 
	session_start();
    include "includes/db.php";
    if(isset($_POST['submit'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);

        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
	    //above query confirms if user inputs are the ones in db
	    $response = mysqli_query($con, $sql);
	    // response has 0 row or i row

	    if ($response) {
	      $num_rows = mysqli_num_rows($response);
	      if ($num_rows == 1) {
	        $row = mysqli_fetch_array($response);
	        $email = $row['email'];
	        $id = $row['id'];
	        // save email and id to the session
	        $_SESSION['msg'] = "<h2>You have logged in successfully.</h2>";
	        $_SESSION['email'] = $email;
	            header('Location: success.html');
	            exit();
	      } else {
	        $_SESSION['msg'] = "<h2>Incorrect Username or Password. Try again.</h2>";
	            header('Location: index.php');
	            exit();
	      }
	    }
    }
?>