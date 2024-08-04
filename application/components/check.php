<?php
	
	error_reporting (E_ALL ^ E_NOTICE);
	session_start();
	
	$faculty_id =  $_SESSION['faculty_id'];
	$record = 0;
	
	$user_qry = "SELECT * FROM tbl_schedule WHERE faculty_id = '".$faculty_id."' AND active_flag = '1'"; 	
	$user_rslt = mysqli_query($con, $user_qry);	
	//record found
	if(mysqli_num_rows($user_rslt) > 0){
		$record = 1;
	}

?>