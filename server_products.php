<?php  session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'project');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form

  $eid = mysqli_real_escape_string($db, $_POST['eid']);

  $pname = mysqli_real_escape_string($db, $_POST['pname']);
  
  $pdesc = mysqli_real_escape_string($db, $_POST['pdesc']);
  $pprice = mysqli_real_escape_string($db, $_POST['pprice']);
  $pqty = mysqli_real_escape_string($db, $_POST['pqty']);
 

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($eid)) { array_push($errors, "Your ID is required"); }
  if (empty($pname)) { array_push($errors, "Product name is required"); }
  if (empty($pdesc)) { array_push($errors, "Product description is required"); }
  if (empty($pprice)) { array_push($errors, "Price is required"); }
  if (empty($pqty)) { array_push($errors, "Quantity is required"); }

  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  

  // Finally, register user if there are no errors in the form
  //encrypt the password before saving in the database

  	$query = "INSERT INTO products (eid,pname,pdesc,pprice,pqty) 
  			  VALUES('$eid', '$pname', '$pdesc', '$pprice', '$pqty')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "The product has been added";
  	header('location: add_products.php');
  }


?>