<?php
session_start();
include('config/connection.php');
if(isset($_GET['name']))
{
    $name= $_GET['name'];
    
    $query="DELETE FROM passenger WHERE fullName='$name'";
    $result= mysqli_query($conn,$query);
    if($result)
    {
        header('location:add.php');
    }
    else
    {
        die(mysqli_error($conn));
    }
}
?>