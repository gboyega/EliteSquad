<?php
 //connect to mySQL
 $con = mysqli_connect("localhost","root", "", "elitesquad");

 //Test connection 
 if (mysqli_connect_errno()) {
 	echo 'Failed to connect to the mySQL:' . mysqli_connect_error();
 }

?>