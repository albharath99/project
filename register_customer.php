<?php include('server_customer.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register as Customer</h2>
  </div>
	
  <form method="post" action="register_customer.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo ""; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="name" value="<?php echo ""; ?>">
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo ""; ?>">
  	</div>
    <div class="input-group">
      <label>address</label>
      <input type="text" name="address" value="<?php echo ""; ?>">
    <div class="input-group">
      <label>phone</label>
      <input type="number" name="phone" value="<?php echo $phone; ?>">
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login_customer.php">Sign in</a>
  	</p>
  </form>
</body>
</html>