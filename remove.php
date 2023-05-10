<?php
include('config/connection.php');
if(isset($_GET['trans_num']))
{
    $trans_num = $_GET['trans_num'];

    $query="DELETE FROM history WHERE Trans_id=$trans_num";
    $result= mysqli_query($conn,$query);
    if($result)
    {
        header('location:cancel.php');
    }
    else
    {
        die(mysqli_error($conn));
    }
}
?>