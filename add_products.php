<?php include('server_products.php')  
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Add products</h2>
  </div>
	
  <form method="post" action="add_products.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Product name</label>
  	  <input type="text" name="pname" value="<?php echo ""; ?>">
  	</div>

    <div class="input-group">
      <label>YOUR ID</label>
      <input type="number" name="eid" value="<?php echo $eid; ?>">
      </div>
  

  	<div class="input-group">
  	  <label>Description</label>
  	  <input type="text" name="pdesc" value="<?php echo ""; ?>">
      </div>
    

      <div class="input-group">
      <label>PRICE</label>
      <input type="number" name="pprice" value="<?php echo $pprice; ?>">
      </div>

      <div class="input-group">
      <label>quantity</label>
      <input type="number" name="pqty" value="<?php echo $pqty; ?>">
      </div>      

      <div class="input-group">
      <button type="submit" class="btn" name="reg_user">SUBMIT</button>
    </div>
      

  	<p>
  		Already a member? <marquee behavior=alternate bgcolor="#1f000f"><b><i><a href=login_entrepreneur.php><font color="white">Sign up now!!</a></i></b></font></marquee>
  </form>
  	</p>
  </form>
</body>
</html>