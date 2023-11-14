<?php 
require_once('dbsample.php');
$name = $_POST['name'];
$rollno = $_POST['rollno'];
$fooditem = $_POST['fooditem'];
$item_qty = $_POST['item_qty'];
$date = $_POST['date'];
$time = $_POST['time'];
$stmt = $conn->prepare("insert into studentsfoodreserve(name, rollno, fooditem, item_qty, date, time) values(?,?,?,?,?,?)");
$stmt->bind_param("sssiss",$name, $rollno, $fooditem, $item_qty, $date, $time);
$stmt->execute();
$stmt->close();
$conn->close(); 
?>