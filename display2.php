<html>
<head>
<title>breakfast</title>
</head>
<body>
<table border="1">
<th>Id</th>
<th>Item</th>
<th>Price</th>
<th>Quantity</th>
<th>Operations</th>
<?php
require_once('dbsample.php');
$sql="SELECT * FROM breakfast";
$result=mysqli_query($conn,$sql);
if($result){
	while($row=mysqli_fetch_assoc($result)){
	 $id=$row['id'];
	 $item=$row['item'];
	 $price=$row['price'];
	 $quantity=$row['quantity'];
	echo ' <tr>
	 <th scope="row">'.$id.'</th>
	 <th>'.$item.'</th>
	 <th>'.$price.'</th>
 	 <th>'.$quantity.'</th>
	 <th><a href=""><button>Update</button></a>
	 <a href="conndeletebreak.php" value="<?php echo $row['id']; ?>"><button>Delete</button></a></th>
	 </tr> ';                              
 	}
}
?>
</table>
</body>
</html>