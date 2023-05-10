<?php

$con= mysqli_connect("localhost","root","","myproject");



if(!$con)
{
    die("Connection error");
}
session_start();
$trans_id  = $_SESSION['trans_no'];
$query = "SELECT * FROM history WHERE Trans_id=$trans_id";
$result = mysqli_query($con,$query);

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <title>History</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Show Ticket Information</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <td>Transaction ID</td>
                                <td>Train Number</td>
                                <td>Train Name</td>
                                <td>Date</td>
                                <td>Source</td>
                                <td>Destination</td>
                                <td>Price</td>
                                <td>Number of Seats</td>
                            </tr>
                            <tr>
                                <?php
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                ?>
                                    <td><?php echo $row['Trans_id'];?></td> 
                                    <td><?php echo $row['TR_NO'];?></td>
                                    <td><?php echo $row['TR_NAME'];?></td> 
                                    <td><?php echo $row['DATE'];?></td>  
                                    <td><?php echo $row['FR_STN'];?></td> 
                                    <td><?php echo $row['TO_STN'];?></td> 
                                    <td><?php echo $row['AMOUNT'];?></td> 
                                    <td><?php echo $row['SEATS'];?></td> 
                            </tr>
                                <?php
                                    }
                                ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">   
        <button type="button" onclick="window.location.href='firstpage.php'" class="btn btn-primary">Home Page</button>
        </div>
    </div>
</body>
</html>
