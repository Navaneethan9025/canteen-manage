<?php 
require_once('dbsample.php');
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$department = $_POST['department'];
$date = $_POST['date'];
$time = $_POST['time'];
$item1 = $_POST['item1'];
$item2 = $_POST['item2'];
$item3 = $_POST['item3'];
$item1qty = $_POST['item1qty'];
$item2qty = $_POST['item2qty'];
$item3qty = $_POST['item3qty'];
$stmt = $conn->prepare("insert into stafforder(name,mobile,department,date,time,item1, item1qty,item2,item2qty,item3,item3qty) values(?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sissssisisi",$name,$mobile,$department,$date,$time,$item1,$item1qty,$item2,$item2qty,$item3,$item3qty);
$stmt->execute();
mysqli_close($conn);
$stmt->close($conn);
$conn->close($conn); 
header('location:displaystafforder.php');
?>