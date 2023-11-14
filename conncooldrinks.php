<?php 
require_once('dbsample.php');
$item = $_POST['item'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$stmt = $conn->prepare("insert into colddrinks(item, quantity, price) values(?,?,?)");
$stmt->bind_param("sis",$item, $quantity, $price);
$stmt->execute();
$stmt->close();
$conn->close(); 
header('location:displaycooldrinks.php');
?>