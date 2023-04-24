<?php

$con= mysqli_connect("localhost","root","","myproject");



if(!$con)
{
    die("Connection error");
}

$query = "SELECT * FROM passenger";
$result = mysqli_query($con,$query);

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
                            <tr class="bg-dark text-white">
                                <td>Passenger Name</td>
                                <td>Age</td>
                                <td>Gender</td>
                                <td>Preference</td>
                                <td>Edit</td>
                            </tr>
                            <tr>
                                <?php
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                ?>
                                    <td><?php echo $row['fullName'];?></td> 
                                    <td><?php echo $row['age'];?></td>
                                    <td><?php echo $row['gender'];?></td> 
                                    <td><?php echo $row['preference'];?></td>  
                                    <td><a class="btn bg-primary" href="update.php?fn=<?php echo $row['fullName'];?>&ag=<?php echo $row['age'];?>&gen=<?php echo $row['gender'];?>&pre=<?php echo $row['preference'];?>&id=<?php echo $row['p_id'];?>">Edit</a></td>
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
        <button type="button" onclick="window.location.href='information.php'" class="btn btn-primary">Add Passenger</button>
        <button type="button" name="submit" class="btn btn-secondary" onclick="window.location.href='payment.php'">Proceed</button>
        </div>
    </div>
</body>
</html>



