<?php 
require_once('dbsample.php');
$item = $_POST['item'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$stmt = $conn->prepare("insert into lunch(item, quantity, price) values(?,?,?)");
$stmt->bind_param("sis",$item, $quantity, $price);
$stmt->execute();
$stmt->close();
$conn->close(); 
header("location: displaylunch.php");
?>