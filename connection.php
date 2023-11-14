<?php 
require_once('dbsample.php');
$dish = $_POST['dish'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$stmt = $conn->prepare("insert into table_name(dish, quantity, price) values(?,?,?)");
$stmt->bind_param("sis",$dish, $quantity, $price);
$stmt->execute();
echo "registration successful";
$stmt->close();
$conn->close(); 
?>

