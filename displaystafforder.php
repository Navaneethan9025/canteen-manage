<!DOCTYPE html>
<html>
<head>
<title>staff order</title>
<style>
body{
background:linear-gradient(rgba(255,255,255,.7),rgba(255,255,255,.7)), url(images/coffee.jpeg) no-repeat;
    background-size:cover;
    background-position:center;
    background-attachment:fixed;
}
table {
border-collapse: collapse;
width: 50%;
color: #588c7e;
font-family: monospace;
font-size: 20px;
text-align: left;
}
button.a{
  color: blue;
}

button.b{
 color: red;
}
th {
text-align: center;
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {
text-align: center;
background-color: #f2f2f2;
}
tr:nth-child(odd) {
text-align: center;
background-color: #f2f2f2; 
}
th{
font-size: 20px;
display: container;
}
td{
 font-size: 20px;
display: container;
}
</style>
</head>
<body border="2">
<center>
<h1>ORDERS</h1>
<table border="3">
<tr>
<th>Name</th>
<th>Mobile</th>
<th>Department</th>
<th>Date</th>
<th>Time</th>
<th>Item1</th>
<th>Quantity1</th>
<th>Item2</th>
<th>Quantity2</th>
<th>Item3</th>
<th>Qunatity3</th>
<th>Update</th>
<th>Delete</th>

</tr>
<?php
require_once('dbsample.php');
$sql = "SELECT * FROM stafforder";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr>
<td>" . $row["name"]. "</td>
<td>" . $row["mobile"]. "</td>
<td>" . $row["department"]. "</td>
<td>" . $row["date"]. "</td>
<td>" . $row["time"]. "</td>
<td>" . $row["item1"] . "</td>
<td>". $row["item1qty"]. "</td>
<td>" . $row["item2"]. "</td>
<td>" . $row["item2qty"]. "</td>
<td>" . $row["item3"]. "</td>
<td>" . $row["item3qty"]. "</td>
<td><a href='update.html'  ><button class='a'>Update</button></a></td> 
<td><a href='delete.html'><button class='b'>Delete</button></a></td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</center>
</body>
</html>