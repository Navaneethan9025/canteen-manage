<?php 
require_once('dbsample.php');
$item = $_POST['item'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$query = "UPDATE litesnacks SET price='$price' , quantity='$quantity' WHERE item='$item' ";
if(mysqli_query($conn,$query)){
	header('location:displaylitesnacks');
}
else{
	echo "updation failed";
}
?>