<?php 
require_once('dbsample.php');
$item = $_POST['item'];
$query = "DELETE FROM colddrinks WHERE item='$item' ";
if(mysqli_query($conn,$query)){
	header('location:displaycooldrinks.php');
}
else{
	echo "updation failed";
}
?>