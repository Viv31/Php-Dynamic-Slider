<?php 
session_start();
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