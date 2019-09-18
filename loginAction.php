<?php 
    include "includes/db.php";
    if(isset($_POST['submit'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);


    }
?>