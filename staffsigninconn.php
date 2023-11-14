<?php 
require_once('dbsample.php');
$user = $_POST['user'];
$pass = $_POST['pass'];
$pass = $_POST['dept'];
$stmt = $conn->prepare("insert into staff-sign-up(user, pass, dept) values(?,?,?)");
$stmt->bind_param("sss",$user, $pass, $dept);
$stmt->execute();
$stmt->close();
$conn->close(); 
?>