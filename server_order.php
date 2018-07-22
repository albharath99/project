
<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 
$user=$_SESSION['username'];
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'project');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $Productname = mysqli_real_escape_string($db, $_POST['username']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($Productname)) { array_push($errors, "prooduct name is required"); }

  // first check the database to make sure 
  // a user doe
  

  // Finally, register user if there are no errors in the form saving in the database

  	$query = "INSERT INTO orders (ord_date, cid, pid) values (NOW(), (select id from customer where username=$user), (select pid from products where pname=Productname))";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
    echo $username ;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index_entrepreneur.php');
  }
  ?>