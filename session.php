
<?php
include ('config/connection.php');
session_start();
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$query="SELECT username FROM login WHERE username='$user_check'";
$ses_sql=mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session))
{
mysqli_close($connection); 
header('Location: index.php'); 
}
?>