<?php 
require_once('dbsample.php');
$item = $_POST['item'];
$query = "DELETE FROM litesnacks WHERE item='$item' ";
if(mysqli_query($conn,$query)){
	header('location:displaylitesnacks');
}
else{
	echo "updation failed";
}
?>