<?php
require_once('dbsample.php');
SESSION_START();	
$user = $_POST['user'];
$pass = $_POST['pass'];
echo $user;
echo $pass;
$query="SELECT username,password FROM stafflogin where username='$user' and password='$pass' ";
$result = mysqli_query($conn,$query);
$row = mysqli_num_rows($result);
	if($row> 0){
$row1=mysqli_fetch_array($result);
echo $row1['password'];
		if($pass == $row1['password']){
		  header('location:booking.html');
		}
		else{
		  echo "<script> alert('Wrong Password');</script>";
		}
	}
	else{
	  echo "<script> alert('User Not Registered'); </script>";
	}

?>
