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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet">
    <title>Second Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: static;
        }
        
        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: navy;
            color: white;
            text-align: center;
        }
        
        .container {
            margin-top: 100px;
            display: flex;
        }
        
        .book, .cancel, .history {
            width: 400px;
            height: 500px;
            background-color: white;
            margin: auto;
            border: 3px solid white;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        h3 {
            text-align: center;
        }
        
        .below {
            text-align: center;
            margin-top: 80px;
        }
        
        .history:hover {
            transform: scale(0.8);
        }
        
        .book:hover {
            transform: scale(0.8);
        }
        
        .cancel:hover {
            transform: scale(0.8);
        }
        
        .btn{
            margin-bottom: 35px;
        }
        
        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #f9f9f9;
            padding: 10px 0;
            text-align: center;
        }
        img{
            max-height: 100%;
            max-width: 100%;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Welcome</h1>
    </div>
    
    <div class="container">
        <div class="book shadow-lg bg-body rounded" onclick="window.location.href='booking.php'">
            <img src="picture/booking_lady.jpg" alt="Book Ticket">
            <button type="button" class="btn btn-primary">Book Now</button>
        </div>
        <div class="cancel shadow-lg bg-body rounded" onclick="window.location.href='cancel.php'">
            <img src="picture/3896684.jpg" alt="Cancel Ticket">
            <button type="button" class="btn btn-primary">Cancel Ticket</button>
        </div>
        <div class="history shadow-lg bg-body rounded" onclick="window.location.href='history.php'">
            
            <img src="picture/history.jpg" alt="History">
            <button type="button" class="btn btn-primary">History</button>
        </div>
    </div>
    
    <footer class="footer">
        <p>For any Questions Feel Free to Contact us</p>
        <p>Toll Free Number: 1800 0343 3244</p>
        <b id="logout"><a href="logout.php">Log Out</a></b>
    </footer>
</html>
