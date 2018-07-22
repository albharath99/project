<?php include('server_customer.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h2>Login as customer</h2>
  </div>
   
  <form method="post" action="login_customer.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" >
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    <p>
      Not yet a member? 
    </p>
    <marquee behavior=alternate bgcolor="#1f000f"><b><i><a href=register_customer.php><font color="white">Sign up now!!</a></i></b></font></marquee>
  </form>
</body>
</html>