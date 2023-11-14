<?php 
require_once('dbsample.php');
$item = $_POST['item'];
$query = "DELETE FROM hotdrinks WHERE item='$item' ";
if(mysqli_query($conn,$query)){
	header('location:displayhotdrinks.php');
}
else{
	echo "updation failed";
}
?>