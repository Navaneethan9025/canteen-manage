<!DOCTYPE html>
<html>
<head>
<title>Lunch</title>
<style>
body{
background:linear-gradient(rgba(255,255,255,.7),rgba(255,255,255,.7)), url(images/chapathi.jpeg) no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}
table {
border-collapse: collapse;
width: 50%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
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
background-color: #f2f2f2}
tr:nth-child(odd) {
text-align: center;
}
    
    @media (max-width:800px){
    #no-more-tables tbody,
    #no-more-table tr,
    #no-more-table td{
        display:block;
    }
        #no-more-tables thead tr{
            position: absolute;
            top: -9999px;
            left: -9999px
        }
        #no-more-tables td{
            position: relative;
            padding-left: 50%;
        }
/*
        #no-more-tables td:before{
            content: attr()
        }
*/
        
    @media (max-width:340px){
    #no-more-tables tbody,
    #no-more-table tr,
    #no-more-table td{
        display:block;
    }
    }
</style>
</head>
<body border="2">
<center>
<h1>LUNCH</h1>
<table border="2">
<tr>
<th>Item</th>
<th>Price</th>
<th>Quantity</th>
<th>Update</th>
<th>Delete</th>
</tr>
<?php
require_once('dbsample.php');
$sql = "SELECT * FROM lunch";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["item"]. "</td><td>" . $row["price"] . "</td><td>"
. $row["quantity"]. "</td> <td><a href='updatecooldrinks.html'  ><button class='a'>Update</button></a></td> 
<td><a href='deletecold.html'><button class='b'>Delete</button></a></td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</center>
</body>
</html>