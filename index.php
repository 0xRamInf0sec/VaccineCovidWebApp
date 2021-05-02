<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
          content="unique login form,leamug login form,boostrap login form,responsive login form,free css html login form,download login form">
    <meta name="author" content="leamug">
    <title>Covid Vaccine</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="css/style.css" rel="stylesheet" id="style">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<style>
body {
  background-image:url('https://www.paho.org/sites/default/files/styles/flexslider_full/public/2021-02/covid-19-vaccine-virus-bk-1500-871.jpg?h=a4efe0f9&itok=XEZc11qM');
  background-position:center;
  background-size:cover;
  
  -webkit-font-smoothing: antialiased;
  font: normal 14px Roboto,arial,sans-serif;
  font-family:"Times New Roman", Times, serif;
}

.container {
    padding: 110px;
}
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: #ffffff!important;
    opacity: 1; /* Firefox */
    font-size:18px!important;
}
.form-login {
    background-color: rgba(0,0,0,0.55);
    padding-top: 10px;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 15px;
    border-color:#d2d2d2;
    border-width: 5px;
    color:white;
    box-shadow:0 1px 0 #cfcfcf;
}
.form-control{
    background:transparent!important;
    color:white!important;
    font-size: 18px!important;
}
h1{
    color:white!important;
}
h4 { 
 border:0 solid #fff; 
 border-bottom-width:1px;
 padding-bottom:10px;
 text-align: center;
}

.form-control {
    border-radius: 10px;
}
.text-white{
    color: black!important;
}
.wrapper {
    text-align: center;
}
.footer p{
    font-size: 18px;
}
.footer
{
	position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: white;
   color: black;
   text-align: center;
}
</style>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-4 text-center">
            <h1 class='text-white'>Get Vaccine Nearby</h1>
              <div class="form-login"></br>
                <h4>Enter the details</h4>
                </br>
				<form action="Details.php" method="POST">
                <input type="text" id="pin" name="Pin" class="form-control input-sm chat-input" placeholder="Pincode"/>
                </br></br>
                <input type="text" id="date" name="Date" class="form-control input-sm chat-input" placeholder="Date"/>
                </br></br>
                <div class="wrapper">
                        <span class="group-btn">
                           <button type="submit" class="btn btn-danger btn-md">Get <i class="fa fa-sign-in"></i></button>
                        </span>
                </div>
				</form>
            </div>
        </div>
    </div>
    </br></br></br>
    <div class="footer">
        <p>Created by Ramalingasamy M K | WebDev | Security Researcher </p>
    </div>
</div>
</body>
</html>
