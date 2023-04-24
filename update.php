<?php
include('config/connection.php');
error_reporting(0);

if(isset($_GET['fn']))
{
    $name=$_GET['fn'];
}

if(isset($_GET['ag']))
{
    $age=$_GET['ag'];
}

if(isset($_GET['gen']))
{
    $gen=$_GET['gen'];
}

if(isset($_GET['pre']))
{
    $prefer=$_GET['pre'];
}

if(isset($_GET['id']))
{
    $id=$_GET['id'];
}

if(isset($_POST['submit']))
{
$fullname = $_POST['fullname'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$preference = $_POST['preference'];

$sql= "UPDATE passenger SET fullName='$fullname',age='$age',gender='$gender',preference='$preference' WHERE p_id=$id";
if(mysqli_query($conn,$sql))
{
    
        echo "<script type='text/javascript'>alert('Record Updated');window.location.href='add.php';</script>";
    
}

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <title>Information</title>
    <style>
        body{
            background-color: grey;
        }
        .first{
            max-width: 800px;
            height: 750px;
            background-color: white;
            margin:auto;
        }
        h1{
            text-align:center;
            background-color: blue;
            color: white;
            font-size: 29px;
            padding: 12px 10px;
        }
        p{
            margin: 10px;
            font-size: 24px;
        }
        .textbox
        {
            margin: 10px;
            width: 780px;
            border-top: 0px;
            border-left: 0px;
            border-right: 0px;
            border-bottom: 1px solid black;
        }
        .radio
        {
            margin: 10px;
        }
        #female
        {
            margin-left: 350px;
        }
        .select
        {
            width: 780px;
            margin: 10px;
        }
        .btn
        {
            margin-top: 130px;
            margin-left: 10px;
            width: 780px;
            padding:5px;
            border-radius: 5px;
            border:2px solid black;
            background-color: orangered;
            color: white;
        }
    </style>
</head>
<body>
    <div class="first">
        <form action="" method="POST">
            <h1>Add Traveller</h1>
            <p>Name</p>
            <input class="textbox" type="text" name="fullname" placehoder="Enter Name" value="<?php echo "$name"; ?>" maxlength="16">
            <br>
            <br>
            <p>Age</p>
            <input class="textbox" type="age" name="age" value="<?php echo "$age"; ?>" placehoder="Enter age" maxlength="3">
            <br>
            <br>
            <p>Gender</p>
            <label><input class="radio" type="radio" name="gender" id="male" value="male"
            <?php
            if($gen=="male")
            {
                echo "checked";
            }
            ?>
            >Male</label>
            <label><input class="radio" type="radio" name="gender" id="female" value="female"
            <?php
            if($gen=="female")
            {
                echo "checked";
            }
            ?>
            >Female</label>
            <br>
            <br>
            <p>Berth Preference</p>
            <select class="select" name="preference">
                <option value="">No preference</option>
                <option value="lower"
                <?php
                if($prefer=="lower")
                {
                    echo "selected";
                }
                ?>
                >Lower</option>
                <option value="upper"
                <?php
                if($prefer=="upper")
                {
                    echo "selected";
                }
                ?>
                >Upper</option>
                <option value="cabin"
                <?php
                if($prefer=="cabin")
                {
                    echo "selected";
                }
                ?>
                >Cabin</option>
                <option value="coupe"
                <?php
                if($prefer=="coupe")
                {
                    echo "selected";
                }
                ?>
                >Coupe</option>
            </select>
            <br>
            <br>
            <br>
            <button type="submit" name="submit" class="btn">Update Information
            </button>
        </form>
    </div>
</body>
</html>