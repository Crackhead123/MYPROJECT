<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Booking</title>
    <style>
        .card{
  margin:auto;
  border:solid 1px #dbdad7; 
  width:60%; 
  padding-left:10px!important;
  padding-bottom:10px!important;
  padding-right:10px!important;
  padding-top: 0px!important;
  
}

.card-title{
  margin:auto;
  padding:15px;
  background-color: #2f7fad;
  color: white;
  width:80%;
}

div.card-body{
  padding:0px;
}
.custom-select{
  width:100%;
}

.btn2{
  margin-left:10%;
}
input {
  outline: 0!important;
  border-width: 0 0 2px!important;
  border-color: #d1d1cf!important;
}
input:focus {
  border-color: #d1d1cf!important;
 -webkit-box-shadow: none!important;
  box-shadow: none!important;
}

select{

 outline: 0!important;
  border-width: 0 0 2px!important;
  border-color: #d1d1cf!important;
}

select:focus{
    border-color: #d1d1cf!important;
 -webkit-box-shadow: none!important;
  box-shadow: none!important;
}

.radiobtn{
  margin-left: 3.5%;
}

.icons{
  margin:auto!important;

}

.fa{
  border-radius: 25px;
  width: 10%;
  margin-left: 5%;
  border:solid 2px #dbdad7;
  margin-top:5%;
  text-align: center;
}

.fa-plane{
  color:#1cad9f;
}

.fa-taxi{
  color: #c2f700;
}

.fa-train{
  color:red;
}

@media only screen and (max-width: 600px) {
  .card{
    margin:auto;
    border:solid 1px #dbdad7;
    width:90%;
    padding-left:10px!important;
    padding-bottom:10px!important;
    padding-right:10px!important;
    padding-top: 0px!important;
  
  }

  .fa{
    border-radius: 25px;
    width: 15%;
    margin-left: 5%;
    border:solid 2px #dbdad7;
    margin-top:5%;
    text-align: center;
  }
}
    </style>
</head>
<body>

<div class="card shadow mb-5 bg-white rounded">

	
	<div class="card-body">

		
		<p class="card-title text-center shadow mb-5 rounded">Travel Booking Form</p>

		<div class="row">

			<div class="col-sm-6">
				<select class="browser-default custom-select mb-4" id="select">
        <option value="" disabled="" selected="">From City</option>
        <option value="1">New Delhi</option>
        <option value="2">Mumbai</option>
        <option value="3">Bangalore</option>
        </select>
			</div>

			<div class="col-sm-6">
				<select class="browser-default custom-select mb-4" id="select">
        <option value="" disabled="" selected="">To City</option>
       <option value="1">New Delhi</option>
        <option value="2">Mumbai</option>
        <option value="3">Bangalore</option>
        </select>
			</div>

		</div>


		<!--Third Row-->
		<div class="row">

			<div class="col-sm-6">
				<input placeholder="&#xf073; Departing" type="text" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome" >
			</div>
            <div class="col-sm-6">
				<select class="browser-default custom-select mb-4 pb-2" id="select">
                    <option value="" disabled="" selected="">No of Passengers</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
			</div>
		</div>
			

		</div>

				<a href="#" class="btn btn-primary float-right mt-5">Find Flights</a>
	</div>
</body>
</html>