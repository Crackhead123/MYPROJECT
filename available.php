<?php
session_start();
if(!isset($_SESSION['login_user']))
{
    header("location:index.php");
}
include('config/connection.php');

$from = $_SESSION['from'];
$to = $_SESSION['to'];
$query = "SELECT * FROM TRAIN WHERE FROM_STN='$from' AND TO_STN='$to';";
$result = mysqli_query($conn,$query);
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
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Show Passenger Information</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <td>Train No</td>
                                <td>Train Name</td>
                                <td>Source</td>
                                <td>Destination</td>
                                <td>Seats</td>
                                <td>Fare</td>
                                <td>Booking</td>
                            </tr>
                            <tr>
                                <?php
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                ?>
                                    <td><?php echo $row['TR_NO'];?></td> 
                                    <td><?php echo $row['TR_NAME'];?></td>
                                    <td><?php echo $row['FROM_STN'];?></td> 
                                    <td><?php echo $row['TO_STN'];?></td>  
                                    <td><?php echo $row['SEATS'];?></td> 
                                    <td><?php echo $row['FARE'];?></td> 
                                    <td><a class="btn bg-primary text-white" href="information.php?tno=<?php echo $row['TR_NO'];?>&tname=<?php echo $row['TR_NAME'];?>&fare=<?php echo $row['FARE'];?>&seat=<?php echo $row['SEATS'];?>">Book Now</a></td>
                            </tr>
                                <?php
                                    }
                                ?>
                        </table>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>