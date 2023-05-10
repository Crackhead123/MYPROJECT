
<?php
session_start(); // Starting Session // Variable To Store Error Message
if (isset($_POST['submit']))
{
if (empty($_POST['username']) || empty($_POST['password']))
{
    echo "<script type='text/javascript'>alert('INVALID INPUT');</script>";
}
else
{
    
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "","myproject");
$query ="SELECT * FROM login WHERE username='$username' AND password ='$password'";
$result=mysqli_query($connection,$query);
$rows = mysqli_num_rows($result);
if ($rows == 1)
{
$_SESSION['login_user']=$username; // Initializing Session
header("location: firstpage.php"); // Redirecting To Other Page
} else
{
echo "<script type='text/javascript'>alert('INVALID INPUT');</script>";
}
mysqli_close($connection); // Closing Connection
}
}
?>
