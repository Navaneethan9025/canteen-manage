<?php 
require_once('dbsample.php');
$name = $_POST['name'];
$query = "DELETE FROM deliverytostaff WHERE name='$name' ";
if(mysqli_query($conn,$query)){
	header('location:displaydeliveryorder.php');
}
else{
	echo "updation failed";
}
?>