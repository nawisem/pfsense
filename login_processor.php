<?php

session_start();

//include the DB connections details here
include("db.php");

//$username  = $_POST['username']; matikan sbb nak guna email
$password= $_POST['password'];
md5($password);
$result = "SELECT id FROM users WHERE /*username = '$username' and*/ password = '$password'";
// echo $result;
// exit();
$result = mysqli_query($connect,$result);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//$active = $row['active'];

$count = mysqli_num_rows($result);

// If result matched $username and $username, table row must be 1 row
  
if($count == 1) {
   $_SESSION['login_user'] = $password;
   
   // Login time is stored in a session variable
   $_SESSION["login_time_stamp"] = time();  

   header("location: loading.php");
}else {
   header("location: interface3.php?error=Wrong Password");
   exit();
}


?>
