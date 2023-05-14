<?php
session_start();
include('config/connection.php');
if(isset($_GET['trans_num']))
{
    $trans_num = $_GET['trans_num'];
    
    $no_of_seats = $_SESSION['seats_left'];
    $no_of_passengers =  $_SESSION['number'];
    $total = $no_of_seats + $no_of_passengers;
    $train_no = $_SESSION['train_no'];
    $query="DELETE FROM history WHERE Trans_id=$trans_num;

    UPDATE train SET SEATS = $total WHERE TR_NO = $train_no;";
    $result= mysqli_multi_query($conn,$query);
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