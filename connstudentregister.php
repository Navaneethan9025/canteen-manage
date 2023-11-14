<?php 
require_once('dbsample.php');
$user = $_POST['user'];
$password = $_POST['password'];
$stmt = $conn->prepare("insert into studentlogin(user, password) values(?,?)");
$stmt->bind_param("ss",$user, $password);
$stmt->execute();
$stmt->close();
$conn->close(); 
header('location:studentloginform.html');
?>