<?php 
require_once('dbsample.php');
$dish = $_POST['dish'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$query = "UPDATE black SET quantity='$quantity' WHERE dish='$dish' ";
if(mysqli_query($conn,$query)){
	echo "Updated successfully";
}
else{
	echo "updation failed";
}
?>