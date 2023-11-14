<?php 
require_once('dbsample.php');
$item = $_POST['item'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$query = "UPDATE breakfast SET price='$price' , quantity='$quantity' WHERE item='$item' ";
if(mysqli_query($conn,$query)){
	header('location:displaybreakfast.php');
}
else{
	echo "updation failed";
}
?>