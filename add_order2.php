<?php include('link.php') ;

if($_POST){
  var_dump($_POST);
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Adding orders :D</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register as Customer</h2>
  </div>
	
  <form method="post" action="postorder.php">
  	<div class="input-group">
  	  <label>Productname</label>
  	  <input type="text" name="username" value="<?php echo ""; ?>">
  	</div>
  	 <button type="submit" class="btn" name="reg_user">CONFIRM</button>
    </div>
      </form>
      <p>Welcome <strong><?php echo $_SESSION['username']; ?>
</body>
</html>