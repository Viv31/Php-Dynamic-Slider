<?php 
session_start();
if($_SESSION['username'] == ""){
	header('location:index.php');
}
?>