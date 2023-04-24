<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="myproject";

// Create connection
$conn = mysqli_connect($servername, $username, $password ,$dbname);


if(isset($_POST['login']))

{
  $uname=$_POST['username'];
  $pass=$_POST['password'];
  $query='SELECT * FROM login WHERE username=? and password=?';
  $stmt=mysqli_prepare($conn, $query);
  mysqli_stmt_bind_param($stmt,'ss',$uname,$pass);
  mysqli_stmt_execute($stmt);
  if(mysqli_stmt_fetch($stmt))
  {
    echo "<script type='text/javascript'>alert('success');window.location.href='index.php';</script>";
  }
  else
  {
    echo "<script type='text/javascript'>alert('error')</script>";
  }

}
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
      body{
        background-image:url(picture/452080.jpg);
        overflow: auto;
      }
      .container{
    background-color:white;
    width:400px;
    border: 5px solid black;
    border-radius: 10px;
    padding-bottom: 8px;
    }
    .h1
    {
      padding-top: 100px;
    }
    </style>
</head>
<body>
    <p class="h1 mt-lg-5 text-center">Welcome To Indian Railway</p>
<div class="container mt-5">
  <h2>Login Here</h2>
  <p id="demo"><b>Click inside the input field to see the floating label effect:</b></p>
  <form method="POST">

    <div class="form-floating mb-3 mt-3">
      <input type="text" class="form-control" id="username" name="username">
      <label for="username">Username</label>
    </div>
    <div class="form-floating mt-3 mb-3">
      <input type="password" class="form-control" id="password"  name="password">
      <label for="password">Password</label>
    </div>
    <button type="submit" value="login" class="btn btn-primary" name="login">Login</button>
    <button type="submit" value="register" class="btn btn-primary" name="register">Register</button>
  </form>
</div>
</body>
</html>