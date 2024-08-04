<?php
	error_reporting (E_ALL ^ E_NOTICE);
	session_start();
	
	$con = mysqli_connect("localhost", "root", "") or die("Connection Problem" . mysqli_errno($con));
	$database = mysqli_select_db($con, "db_cel_form") or die("SQL Problem" . mysqli_error($con));
	
	//date_default_timezone_set($timezone);
	date_default_timezone_set("Asia/Manila");
	$today = date('F j, Y, h:i a');//gmt+8
	
	$connect = new PDO("mysql:host=localhost;dbname=db_cel_form", "root", "");
?>