<?php
include('config/connection.php');
session_start();

if(isset($_POST['submit']))
{
  $_SESSION['from']=$_POST['source'];
  $_SESSION['to']=$_POST['destination'];
  $_SESSION['date']=$_POST['select_date'];
  $_SESSION['prefer']=$_POST['prefer'];
  $_SESSION['number']=$_POST['select'];
  $_SESSION['pass_name']=$_POST['pass_name'];
  echo "<script type='text/javascript'>alert('Record Updated');window.location.href='available.php';</script>";
}
?>







<!DOCTYPE html>
<html>
  <head>
    <title>Train Ticket Booking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
      #select
      {
        margin-top: 10px;
        border-radius: 4px;
      }
      body {
        background-image: url("picture/pexels-rajat-jain-325200.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        position: relative; 
      }
      .container {
        margin-top: 50px;
        max-width: 600px;
        margin-left: 20px;
        margin-right: auto;
      }

      form {
        margin-left: 10px;
        width: 100%;
      }

      label {
        font-weight: bold;
      }

      select, input {
        font-size: 14px;
        height: 35px;
      }  
      h1{
        margin-left: 15px;
      }
      
    </style>
  </head>
  <body>
    <div class="container">
      <h1 class="text-center my-4 text-white bg-black">Train Ticket Booking</h1>
    
      <form id="form" method="POST">
        <div class="form-group">
          <label for="source"><b class="text-white">From Station:</b></label>
           <select class="form-control" id="source" name="source" required>
              <option value="">Select a source...</option>
              <option value="New Jalpaiguri">New Jalpaiguri</option>
              <option value="New Coochbehar">New Coochbehar</option>
              <option value="Jalpaiguri Road">Jalpaiguri Road</option>
              <option value="Dhupguri">Dhupguri</option>
              <option value="Maldah Town">Maldah Town</option>
            </select>
            <br>
            <div class="input-group">
                <label for="Swap"></label>
            <div class="input-group-append">
              <button class="btn btn-outline-secondary bg-black" type="button" id="swap-button"><i class="fas fa-exchange-alt">
                <img src="picture/swap.png" alt=""style="width:50%; height:25px">
              </i></button>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="destination"><b class="text-white">Destination:</b></label>
          <select class="form-control" id="destination" name="destination" required>
            <option value="">Select a destination...</option>
            <option value="New Jalpaiguri">New Jalpaiguri</option>
            <option value="New Coochbehar">New Coochbehar</option>
            <option value="Jalpaiguri Road">Jalpaiguri Road</option>
            <option value="Dhupguri">Dhupguri</option>
            <option value="Maldah Town">Maldah Town</option>
          </select>
        </div>
        <div class="form-group">
          <label for="select_date"><b class="text-white">Date of Journey:</b></label>
          <input class="form-control" type="date" id="select_date" name="select_date" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
        </div>
        <div class="form-group">
          <select class="form-control" id="prefer" name="prefer" required>
            <option value="General"> General</option>
            <option value="Ladies"> Ladies</option>
            <option value="Lower Birth/ Sr citizen"> Lower Birth/ Sr Citizen</option>
            <option value="Person With Dissability"> Person With Dissability</option>
            <option value="Tatkal"> Tatkal</option>
            <option value="Premium Tatkal"> Premium Tatkal</option>
          </select>
          <select class="browser-default custom-select mb-4 pb-2" name="select" id="select">
                    <option value="" disabled="" selected="">No of Passengers</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                </select>
        </div>
        <div class="">
          <label for="pass_name"><b class="text-white">Ticket Under Name:</b></label>
          <br>
          <input type="text" name="pass_name" id="pass_name" placeholder="Enter Name" required size=85>
        </div>
        <button type="submit" name="submit" class="btn btn-primary mt-3">Search</button>
      </form>
    </div>
  </body>
</html>  