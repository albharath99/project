<?php

session_start(); 

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'project';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT pname, pdesc, pprice, pid from products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Product name " . $row["pname"]. " Product description- : "."<br>" . $row["pdesc"]. " Price" . $row["pprice"]. "ID is ". $row["pid"] ."  do u wanna buy?". "<a href=add_order2.php>CLICK ME!!</a> ";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<html>
<body>
  <form action="add_order.php" method="get">

</body>