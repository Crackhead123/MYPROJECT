<?php
session_start();
echo $_SESSION['trans_no'];
if(isset($_GET['home_page']))
{
    $no_of_seats = $_SESSION['seats_left'];
    $no_of_passengers =  $_SESSION['number'];
    $total = $no_of_seats + $no_of_passengers;
    $train_no = $_SESSION['train_no'];
    $sql = "UPDATE train SET SEATS = $total WHERE TR_NO = $train_no";
    $sql_run = mysqli_query($con,$sql);
    if($sql_run)
    {
        echo "<script type='text/javascript'>alert('Train Record Updated');window.location.href='firstpage.php';</script>";
    }
}
?>