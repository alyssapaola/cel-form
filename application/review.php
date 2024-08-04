<?php
	include '../connect.php';
	error_reporting (E_ALL ^ E_NOTICE);
	session_start();
	
	$faculty_id =  $_SESSION['faculty_id'];
	
	if(!isset($_SESSION["faculty_name"]) || $_SESSION["faculty_name"] == "" ){
		header("location: ../index.php");
		exit;	
	}
	else{
		
		$faculty_name = $_SESSION['faculty_name'];
		
		//checking of id here
		include 'components/check.php';
		
		// Check if the user accomplished already the form, else do not enter
		if($record == "1" ){
			echo "<script type='text/javascript' language='javascript' >
				alert('You have already accomplished this form. Redirecting you to the main page')
				window.location.replace('../index.php');
			</script>";
		}
		else{
			$query = "SELECT * FROM tbl_schedule_temp WHERE faculty_id = '$faculty_id' AND active_flag = '1' ";
			$result = mysqli_query($con, $query);							
			if(mysqli_num_rows($result) > 0){
				include 'review-ok.php';
			}
			
			else{
				include 'review-none.php';
			}
		}
		
	}
	
?>