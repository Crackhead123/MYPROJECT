<?php
session_start();
if(!isset($_SESSION['login_user']))
{
    header("location:index.php");
}

include('config/connection.php');
if(isset($_POST['submit']))
{
	$user_name = $_SESSION['login_user'];
	$unique_id = rand(100,10000);
	$_SESSION['trans_no']=$unique_id;
	$train_no = $_SESSION['train_no'];
	$train_name = $_SESSION['train_name'];
	$date = $_SESSION['date'];
	$source = $_SESSION['from'];
	$destination = $_SESSION['to'];
	$seats = $_SESSION['number'];
	$price = $_SESSION['price'];
	$train_seats = $_SESSION['no_of_seats'];
	$name = $_SESSION['name'];
	$amount = $seats * $price ; 
	$seats_left = $train_seats - $seats;
	$_SESSION['seats_left']=$seats_left;
	$query = "INSERT INTO history(Trans_id,TR_NO,TR_NAME,DATE,FR_STN,TO_STN,AMOUNT,SEATS,user_name)VALUES($unique_id,$train_no,'$train_name','$date','$source','$destination',$amount,$seats,'$user_name');
	UPDATE train SET SEATS=$seats_left WHERE TR_NO=$train_no;";
	if(mysqli_multi_query($conn,$query))
	{
		echo "<script type='text/javascript'>alert('Add Successfully');window.location.href='successfull.php';</script>";
	}
}
?>







<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment</title>
	<link rel="stylesheet" type="text/css" href="css/payment.css">
</head>
<body>
<header>
	<div class="container">
		<div class="left">
			<h3>BILLING ADDRESS</h3>
			<form method="POST">
				Full name
				<input type="text" name="fullname" placeholder="Enter name">
				Email
				<input type="text" name="email" placeholder="Enter email">

				Address
				<input type="text" name="address" placeholder="Enter address">
				
				City
				<input type="text" name="city" placeholder="Enter City">
				<div id="zip">
					<label>
						State
					<select>
						<option value="Andhra Pradesh">Andhra Pradesh</option>
						<option value="Arunachal Pradesh">Arunachal Pradesh</option>
						<option value="Assam">Assam</option>
						<option value="Bihar">Bihar</option>
						<option value="Chandigarh">Chandigarh</option>
						<option value="Chhattisgarh">Chhattisgarh</option>
						<option value="Delhi">Delhi</option>
						<option value="Lakshadweep">Lakshadweep</option>
						<option value="Puducherry">Puducherry</option>
						<option value="Goa">Goa</option>
						<option value="Gujarat">Gujarat</option>
						<option value="Haryana">Haryana</option>
						<option value="Himachal Pradesh">Himachal Pradesh</option>
						<option value="Jammu and Kashmir">Jammu and Kashmir</option>
						<option value="Jharkhand">Jharkhand</option>
						<option value="Karnataka">Karnataka</option>
						<option value="Kerala">Kerala</option>
						<option value="Madhya Pradesh">Madhya Pradesh</option>
						<option value="Maharashtra">Maharashtra</option>
						<option value="Manipur">Manipur</option>
						<option value="Meghalaya">Meghalaya</option>
						<option value="Mizoram">Mizoram</option>
						<option value="Nagaland">Nagaland</option>
						<option value="Odisha">Odisha</option>
						<option value="Punjab">Punjab</option>
						<option value="Rajasthan">Rajasthan</option>
						<option value="Sikkim">Sikkim</option>
						<option value="Tamil Nadu">Tamil Nadu</option>
						<option value="Telangana">Telangana</option>
						<option value="Tripura">Tripura</option>
						<option value="Uttar Pradesh">Uttar Pradesh</option>
						<option value="Uttarakhand">Uttarakhand</option>
						<option value="West Bengal">West Bengal</option>
						</select>
					</label>
						<label>
						Zip code
						<input type="number" name="pincode" placeholder="Zip code">
					</label>
				</div>
			</form>
		</div>
		<div class="right">
			<h3>PAYMENT</h3>
			<form method="POST">
				Accepted Card <br>
				<img src="picture/card1.png" width="100">
				<img src="picture/card2.png" width="50">
				<br><br>

				Credit card number

				<input type="text" id="card_number" name="card_number" placeholder="Enter card number" maxlength="16" required>

				
				Exp Month
                 <input type="text" name="exp" placeholder="Enter Month" oninput="validateExpMonth(this)">
				<div id="zip">
					<label>
						Exp year
						<select>
							<option>Choose Year..</option>
							<option>2022</option>
							<option>2023</option>
							<option>2024</option>
							<option>2025</option>
							<option>2026</option>
							<option>2027</option>
							<option>2028</option>
							<option>2029</option>
							<option>2030</option>
							
						</select>
					</label>
						<label>
						CVV
						<input type="number" name="cvv" value="cvv" placeholder="CVV" required>
					</label>
				</div>
				<input type="submit" name="submit" value="Proceed to Checkout">
			</form>
		</div>
	</div>
</header>
<script>
	document.getElementById("card_number").addEventListener("input", function (e) {
		var input = e.target.value;
		e.target.value = input.replace(/[^\d]/g, "").substr(0, 16);
	});
</script>
<script>
function validateExpMonth(input) {
  // Remove any non-digit characters
  input.value = input.value.replace(/\D/g, '');

  // Limit the input to 2 digits
  if (input.value.length > 2) {
    input.value = input.value.slice(0, 2);
  }

  // Limit the input to a maximum value of 12
  const month = parseInt(input.value, 10);
  if (month > 12) {
    input.value = '12';
  }
}
</script>

</body>
</html>