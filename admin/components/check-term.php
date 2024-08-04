<?php  
	error_reporting (E_ALL ^ E_NOTICE);
	session_start();
	include '../../connect.php';
	
	//some basic validation
	if(!empty($_POST)){ 
		$semester = mysqli_real_escape_string($con, $_POST["semester"]);
		$year_one = mysqli_real_escape_string($con, $_POST["year_one"]);
		$year_two = mysqli_real_escape_string($con, $_POST["year_two"]);
		$acad_id = $_POST["acad_id"];
		
		$duplicate = 1;
		
		//$default_flag = isset($_POST["status"]);

		if(isset($_POST['status'])){
			$default_flag = "1";
		}
		else{
			$default_flag = "0";
		}
		
	
		//if update
		
		if($_POST["acad_id"] != ''){ 
			
			//check if name exists
			$query = "SELECT * FROM tbl_academic_year 
					WHERE acad_period = '".$semester."' AND acadyear_one = '".$year_one."' AND acadyear_two = '".$year_two."' AND delete_flag = '0' "; 
			$result = mysqli_query($con, $query);
			if(mysqli_num_rows($result) > 0){ //may result
				while($row = mysqli_fetch_array($result)){
					$default_flag_db = $row['default_flag'];
					$acad_id_db = $row['acad_id'];
				}
			}
			
			//check if update is not the same with the record // also with the same acad_id
			if ($default_flag_db != $default_flag && $acad_id == $acad_id_db){
				$duplicate = "";
			}
			
			//if flag is the same and acad id is the same
			if ($default_flag_db == $default_flag && $acad_id == $acad_id_db){
				$duplicate = "No changes made";
			}
			
		}
		
		//if new
		else{
			
			$query = "SELECT * FROM tbl_academic_year 
						WHERE acad_period = '".$semester."' AND acadyear_one = '".$year_one."' AND acadyear_two = '".$year_two."' AND delete_flag = '0'"; 
		
		}
				
		/*
		if ($default_flag_db == $default_flag){
					$duplicate = 1;
				}
				
		*/
		//if($duplicate != "0"){
			echo $duplicate;
		//}
		
		
	}
?>