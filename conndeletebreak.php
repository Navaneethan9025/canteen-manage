<?php 
require_once('dbsample.php');
$item = $_POST['item'];
$query = "DELETE FROM breakfast WHERE item='$item' ";
if(mysqli_query($conn,$query)){
	header('location:displaybreakfast.php');
}
else{
	echo "updation failed";
}
?>