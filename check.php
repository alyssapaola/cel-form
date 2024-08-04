<?php  
	error_reporting (E_ALL ^ E_NOTICE);
	session_start();
	include 'connect.php';
	
	//check if FACULTY NUM exists or not
	if(!empty($_POST)){ 
		
		$faculty_id = mysqli_real_escape_string($con, $_POST["faculty_id"]);  
		
		$user_qry = "SELECT * FROM tbl_faculty WHERE faculty_id = '".$faculty_id."' AND active_flag = '1'"; 
		
		$user_rslt = mysqli_query($con, $user_qry);
		
		//record found
		if(mysqli_num_rows($user_rslt) > 0){
			while($row = mysqli_fetch_assoc($user_rslt)){
				$db_firstname = $row['first_name'];
				$db_lastname = $row['last_name'];
				$name = $db_lastname.", ".$db_firstname; 
				echo $name;
				
				$_SESSION['faculty_name'] = $db_firstname;
				$_SESSION['faculty_id'] = $faculty_id;
			}
		}
		
	}
?>