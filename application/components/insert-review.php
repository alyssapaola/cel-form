<?php 

	error_reporting (E_ALL ^ E_NOTICE);
	session_start();
	include '../../connect.php';
	
	$faculty_id =  $_SESSION['faculty_id'];
	
	date_default_timezone_set('Asia/Manila');
	$dateNow =  date('Y-m-d, h:i A');

	if(!empty($_POST)){ 
		
		//saved
		if(isset($_POST['save'])){
			
			//get ID
			$cntID_qry = "SELECT schedule_id, COUNT(*) as total FROM tbl_schedule";
			$cntID_rslt = mysqli_query($con, $cntID_qry);
			if(mysqli_num_rows($cntID_rslt) > 0){
				while($row = mysqli_fetch_assoc($cntID_rslt)){
					$total = $row['total'];
					$total = $total+1;
					$counter = str_pad($total, 3, '0', STR_PAD_LEFT);
					$schedule_id_db = "SCHED_".$counter;
				}
			}
			
			//insert to permanent schedule
			$query = "SELECT * FROM tbl_schedule_temp WHERE faculty_id = '$faculty_id' AND active_flag = '1' ";
			$result = mysqli_query($con, $query);							
			if(mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_array($result)){
					$subject_code = $row['subject_code'];
					$subject_desc = $row['subject_desc'];
					$section = $row['section'];
					$schedule_time1 = $row['schedule_time1'];
					$schedule_time2 = $row['schedule_time2'];
					$term_period = $row['term_period'];
					
					$queryInsert = "INSERT INTO tbl_schedule (id, schedule_id, faculty_id, subject_code, subject_desc, section, schedule_time1, schedule_time2, term_period, date_registered, active_flag) VALUES ('', '". $schedule_id_db."', '". $faculty_id."', '". $subject_code."', '".$subject_desc."', '".$section."', '".$schedule_time1."', '".$schedule_time2."', '".$term_period."', '".$dateNow."', '1')";
					mysqli_query($con, $queryInsert);
				}	
			}
			
			//set to non active the temp data
			$queryReset = "UPDATE tbl_schedule_temp SET active_flag='0' WHERE faculty_id = '".$faculty_id."'";
			//mysqli_query($con, $queryReset);
			
			if(mysqli_query($con, $queryReset)){
				echo "<script type='text/javascript' language='javascript' >
					alert('Your form is submitted. Thank you very much')
					window.location.replace('../../index.php');
				</script>";
			}
			
		}
		
		//reset
		if(isset($_POST['reset'])){
			$queryReset1 = "UPDATE tbl_schedule_temp SET active_flag='0' WHERE faculty_id = '".$faculty_id."'";
		
			if(mysqli_query($con, $queryReset1)){
				echo "<script type='text/javascript' language='javascript' >
					alert('Reset Successful')
					window.location.replace('../prelim-view.php');
				</script>";
			}
			
		}
		
	}
	

?>