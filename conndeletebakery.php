<?php 
require_once('dbsample.php');
$item = $_POST['item'];
$query = "DELETE FROM bakery WHERE item='$item' ";
if(mysqli_query($conn,$query)){
	header('location:displaybakery.php');
}
else{
	echo "updation failed";
}
?>