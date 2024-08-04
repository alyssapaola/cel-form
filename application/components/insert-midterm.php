<?php 

	error_reporting (E_ALL ^ E_NOTICE);
	session_start();
	include '../../connect.php';

	$arr = $_POST['arr'];
	
	$term = 2;
	$faculty_id =  $_SESSION['faculty_id'];

	if(is_array($arr)){
		foreach ($arr as $row) {
			$subject_code = strtoupper(mysqli_real_escape_string($con, $row[0]));
			$subject_desc = mysqli_real_escape_string($con, $row[1]);
			$section = strtoupper(mysqli_real_escape_string($con, $row[2]));
			$subject_starttime = mysqli_real_escape_string($con, $row[3]);
			$subject_endtime = mysqli_real_escape_string($con, $row[4]);
			
			$query ="INSERT INTO tbl_schedule_temp (id, faculty_id, subject_code, subject_desc, section, schedule_time1, schedule_time2, term_period, active_flag) VALUES ('', '". $faculty_id."', '". $subject_code."', '".$subject_desc."', '".$section."', '".$subject_starttime."', '".$subject_endtime."', '".$term."', '1')";
			
			if(mysqli_query($con, $query)){
				echo "Schedule is saved!";
			}
			
		}
	}
	

?>