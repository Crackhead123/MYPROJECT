<?php
session_start();
if(!isset($_SESSION['login_user']))
{
    header("location:index.php");
}

include('config/connection.php');
error_reporting();


$trans_id = $_SESSION['trans_no'];
$query = "SELECT * FROM history WHERE Trans_id=$trans_id";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <title>Show Information</title>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Show Passenger Information</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">    
                            <tr>
                                <td class="bg-dark text-white">Transaction Number</td>
                                <td><?php echo $row['Trans_id'] ?></td>
                                <td class="bg-dark text-white">Train Number</td>
                                <td><?php echo $row['TR_NO'] ?></td>
                            </tr>
                            <tr>
                            <td class="bg-dark text-white">Train Name</td>
                                <td><?php echo $row['TR_NAME'] ?></td>
                                <td class="bg-dark text-white">Date</td>
                                <td><?php echo $row['DATE'] ?></td>
                            </tr>
                            <tr>
                                <td class="bg-dark text-white">Source</td>
                                <td><?php echo $row['FR_STN'] ?></td>
                                <td class="bg-dark text-white">Destination</td>
                                <td><?php echo $row['TO_STN'] ?></td>
                            </tr>
                            <tr>
                                <td class="bg-dark text-white">Amount</td>
                                <td><?php echo $row['AMOUNT'] ?></td>
                                <td class="bg-dark text-white">Number of seats</td>
                                <td><?php echo $row['SEATS'] ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">   
        <button type="button" onclick="window.location.href='firstpage.php'" class="btn btn-primary">Home page</button>
        </div>
    </div>
</body>
</html>

