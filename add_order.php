

<?php

session_start();
 
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'project';
$user=$_SESSION['username'];
//$pnames=$_SESSION['pname'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT into orders (ord_date, cid) values (SYSDATE, (select id from customer where username = $user) ) ";
$result = $conn->query($sql);

/*if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Product name " . $row["pname"]. " Product description- : "."<br>" . $row["pdesc"]. " Price" . $row["pprice"].  $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}*/
echo $user;

$conn->close();
?>

