<?php 
require_once('dbsample.php');
$item = $_POST['item'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$stmt = $conn->prepare("insert into hotdrinks(item, quantity, price) values(?,?,?)");
$stmt->bind_param("sis",$item, $quantity, $price);
$stmt->execute();
echo "registration successful";
$stmt->close();
$conn->close(); 
header('location:displayhotdrinks.php');
?>