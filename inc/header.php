<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "minthunt_task";
$conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);
if($conn){
//echo "Connected";
}
else{
  //echo "Failed";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>MINTHUNT</title>
	<!-- Latest compiled and minified CSS -->
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
	body{
background-image: url('img/hms2.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: repeat-x;
    height: 100vh;

  }
  #admin_login_form{
		 background-image: url('img/7.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: repeat-x;
    height: 100vh;
	}

label{
	color: white;
}
#form_container{
	background-color: rgba(0,0,0,0.7);
	height: 250px;
}	

#add_doctor_form_container{
  background-color: rgba(0,0,0,0.7);
  padding: 10px;
  margin-top: 20px;

}

#forget_password_div{
  background-color: rgba(0,0,0,0.7);
  padding: 10px;
  margin-top: 20px;
}

#change_passwordformdiv{
  background-color: rgba(0,0,0,0.7);
  padding: 10px;

}
</style>

</head>
<body>