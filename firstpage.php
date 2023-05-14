<?php
session_start();
if(!isset($_SESSION['login_user']))
{
    header("location:index.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <title>Second Page</title>
    <style>
        .container{
            margin-top: 100px;
            display: flex;
        }
        h1{
            text-align: center;
            margin:auto;
            background-color: blue;
            color:white;
        }
        .book,.cancel,.history{
            width: 300px;
            height: 400px;
            background-color: white;
            margin: auto;
            border: 3px solid white;
            border-radius: 10px;
        }
        h3{
            text-align: center;
        }
        .below
        {
            text-align: center;
            margin-top: 80px;
        }
        .history:hover
        {
            transform: scale(1.3);
            z-index: 2;
        }
        .book:hover
        {
            transform: scale(1.3);
            z-index: 2;
        }
        .cancel:hover
        {
            transform: scale(1.3);
            z-index: 2;
        }
        .btn
        {
           margin-left: 90px;
           margin-top : 200px;
        }
    </style>
</head>
<body>
    <h1>Welcome</h1>
    <div class="container">
        <div class="book shadow-lg bg-body rounded">
            <h3>Book Ticket</h3>
            <form method="GET">
            <button type="button" onclick="window.location.href='booking.php'" name="booking" class="btn btn-outline-primary">Click Here</button>
            </form>
        </div>
        <div class="cancel shadow-lg bg-body rounded">
        <h3>Cancel Ticket</h3>
        <button type="button" onclick="window.location.href='cancel.php'" class="btn btn-outline-primary">Click Here</button>
        </div>
        <div class="history shadow-lg bg-body rounded">
            <h3>History</h3>
            <button type="button" onclick="window.location.href='history.php'" class="btn btn-outline-primary">Click Here</button>
        </div>
    </div>
    <footer class="below">
        <p>For any questions please contact us</p>
        <p>Toll Free Number: 1800 0343 3244</p>
        <b id="logout"><a href="logout.php">Log Out</a></b>
    </footer>
</body>
</html>