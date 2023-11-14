<?php 
require_once('dbsample.php');
$item = $_POST['item'];
$query = "DELETE FROM lunch WHERE item='$item' ";
if(mysqli_query($conn,$query)){
	header('location:displaylunch.php');
}
else{
	echo "updation failed";
}
?>