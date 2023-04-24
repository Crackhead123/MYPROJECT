<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="myproject";


// Create connection
$conn = mysqli_connect($servername, $username, $password ,$dbname);



if(isset($_POST['submit']))
{
$user = $_POST['username'];
$pass = $_POST['password'];

$sql= "INSERT INTO login (username,password) VALUES('$user','$pass')";
if(mysqli_query($conn,$sql))
{
    
        echo "<script type='text/javascript'>alert('User Registered');window.location.href='bootlogin.php';</script>";
    
}

}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registor</title>
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
  <h2>Register Here</h2>
  <p id="demo"><b>Click inside the input field to see the floating label effect:</b></p>
  <form method="POST">

    <div class="form-floating mb-3 mt-3">
      <input type="text" class="form-control" id="username"  name="username">
      <label for="username">Set Username</label>
    </div>
    <div class="form-floating mt-3 mb-3">
      <input type="password" class="form-control" id="password"  name="password">
      <label for="username">Set Password</label>
    </div>
    <button type="submit" value="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
</div>
</body>
</html>