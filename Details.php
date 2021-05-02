<?php
$pin=$_POST['Pin'];
$date=$_POST['Date'];
$string = "https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/findByPin?pincode=".$pin."&date=".$date;
$data = json_decode(file_get_contents($string),true);
$out=count($data["sessions"]);

?>
<html>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<style>

.glyphicon {  margin-bottom: 10px;margin-right: 10px;}

small {
display: block;
line-height: 1.428571429;
color: #999;
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  padding: 5px 10px;
  background: #555;
  color: #f1f1f1;
  text-align:center;
}
.container
{
	padding-top:50px;
	padding-bottom:0px;
	padding-left:250px;
	
}

</style>
<body>
<div class="header" id="myHeader">
  <h2>Vaccine Details.</h2>
</div>
<?php
if($out==0)
{
	echo "<h1>There are no hospitals found.....</h1>";
}
else
{
for ($x = 0; $x <$out; $x++) {
  echo "<div class='container'>
    <div class='row'>
        <div class='col-xs-12 col-sm-6 col-md-6'>
            <div class='well well-sm'>
                <div class='row'>
                    <div class='col-sm-6 col-md-4'>
                        <img src='https://img.freepik.com/free-vector/couple-doctors-with-stethoscope-avatar-character_24877-63673.jpg?size=338&ext=jpg&ga=GA1.2.2075113639.1618617600' alt='' class='img-rounded img-responsive' />
                    </div>
                    <div class='col-sm-6 col-md-8'>
                        <h4>".$data["sessions"][$x]['name']."
                        </h4>
						<center>".$data["sessions"][$x]['vaccine']."<center>
						<br>
                        <p>
						<b>State</b> : ".$data["sessions"][$x]['state_name']."
						</br>
						<b>District</b> : ".$data["sessions"][$x]['district_name']."
						</br>
						<b>From </b> : ".$data["sessions"][$x]['from']."
						</br>
						<b>To</b> : ".$data["sessions"][$x]['to']."
						</br>
						<b>Status </b> : ".$data["sessions"][$x]['fee_type']."
						</br>
						<b>Availabale capacity</b> : ".$data["sessions"][$x]['available_capacity']."
						</br>
						<b>Age limit </b> : ".$data["sessions"][$x]['min_age_limit']."
						</br>
						</p>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
}
}
?>


</body>
</html>