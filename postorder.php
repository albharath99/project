<? php
$pname = $_POST['username'];
echo $pname;
$pname = mysqli_real_escape_string($db, $_POST['pname']);



?>