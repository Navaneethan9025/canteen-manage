<?php 
require_once('dbsample.php');
$item = $_POST['item'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$stmt = $conn->prepare("insert into bakery(item, quantity, price) values(?,?,?)");
$stmt->bind_param("sis",$item, $quantity, $price);
$stmt->execute();
$stmt->close();
$conn->close(); 
header('location:displaybakery.php');
?>