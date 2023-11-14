<?php
require_once('dbsample.php');
$itemn=$_POST['item1'];
$orderqty=$_POST['item1qty'];
$total_item_qty="SELECT quantity FROM breakfast WHERE item='$itemn' ";
$aval_qty=$total_item_qty-$orderqty;
$query="UPDATE table_name SET quantity='$aval_qty' WHERE item='$itemn' ";
$qy=multi_query($conn,$total_item_qty,$query);
return $qy;
?>