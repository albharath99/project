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

$sql = "SELECT pname, pdesc, pprice FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Product name " . $row["pname"]. " Product description- : "."<br>" . $row["pdesc"]. " Price" . $row["pprice"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>