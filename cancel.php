<?php

$con= mysqli_connect("localhost","root","","myproject");



if(!$con)
{
    die("Connection error");
}


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
                    <div class="card-header">Search and Canel Ticket
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">


                                <form method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" placeholder="Enter Your Transaction ID">
                                        <button class="btn btn-primary" type="submit">Search</button>
                                    </div>
                                </form>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Transaction ID</th>
                                    <th>Train Number</th>
                                    <th>Train Name</th>
                                    <th>Date</th>
                                    <th>From Station</th>
                                    <th>To Station</th>
                                    <th>Amount</th>
                                    <th>Seats</th>
                                    <th>Cancel</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include('config/connection.php');

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM history WHERE CONCAT(Trans_id,TR_NO,TR_NAME,DATE,FR_STN,TO_STN,AMOUNT,SEATS) LIKE '%$filtervalues%'";
                                        $query_run = mysqli_query($conn,$query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['Trans_id']; ?></td>
                                                    <td><?= $items['TR_NO']; ?></td>
                                                    <td><?= $items['TR_NAME']; ?></td>
                                                    <td><?= $items['DATE']; ?></td>
                                                    <td><?= $items['FR_STN']; ?></td>
                                                    <td><?= $items['TO_STN']; ?></td>
                                                    <td><?= $items['AMOUNT']; ?></td>
                                                    <td><?= $items['SEATS']; ?></td> 
                                                    <td><button class="btn btn-danger"><a class="text-light" href="remove.php?trans_num=<?= $items['Trans_id']; ?>">Cancel</a></button></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="9">No record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                                <tr>
                                    <td>

                                    </td>
                                </tr>


                            </tbody>
                        </table>
                        <form method="GET">
                        <button class="btn btn-primary" onclick="window.location.href='firstpage.php'">Home Page</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
