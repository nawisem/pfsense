<?php
session_start();

//include the DB connections details here
include("db.php");

if (isset($_POST['btnLogin'])) {
      $sql="INSERT INTO users (password, usertype, fullname, phonenum, email)
      VALUES ( '$_POST[password]', 'client', '$_POST[fullname]', '$_POST[phonenum]', '$_POST[email]')";
      // print_r($sql);
      // exit();

      $result = $connect->query($sql);

      //redirect to the register_done page;
      //$_SESSION['username'] = $_POST['username'];
      $_SESSION['password'] = $_POST['password'];
      $_SESSION['fullname'] = $_POST['fullname'];
      $_SESSION['phonenum'] = $_POST['phonenum'];
      $_SESSION['email'] = $_POST['email'];


      $to = 'interface1.php';
      header('Location: '. $to);
      mysqli_close($connect);
      exit;
}

?>

<style>
      body{
      background-image : url("/capthor/gambar/hotel2.jpg");
      background-size: contain;
      background-repeat:no-repeat;
      width: 1500px;
      height: 750px;
      }
      h1{ 
      text-align:center;
      margin-top: 18%; 
      color:white;  
      }
      .text{
      text-align:center;
      }
      #fullname{
      color:white;
      }
      #username{
      color:white;
      }
      #password{
      color:white;
      }
      #phonenum{
      color:white;
      }
      #email{
      color:white;
      }

    

</style>

<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
      <h1>Registration Form</h1>
      <form class="text" method="POST">  
            <a id="fullname">Fullname : </a>
                  <input type="text" name="fullname" required><br><br>
            <!--<a id="username">Username : </a> 
                  <input type="text" name="username" required><br> <br>-->
            <a id="password">Password : </a>
                  <input type="password" name="password" required><br><br>
            <a id="phonenum">Phone No : </a>
                  <input type="text" name="phonenum" required><br><br>
            <a id="email">Email : </a>
                  <input type="text" name="email" required><br><br>      
        <button type="submit" name="btnLogin" >Login</button> <br> <br>  
    </form>  
</body>
</html>