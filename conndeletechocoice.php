<?php 
require_once('dbsample.php');
$item = $_POST['item'];
$query = "DELETE FROM choclateice WHERE item='$item' ";
if(mysqli_query($conn,$query)){
	header('location:displaychocoice.php');
}
else{
	echo "updation failed";
}
?>