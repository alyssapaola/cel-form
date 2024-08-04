<?php

	error_reporting (E_ALL ^ E_NOTICE);
	session_start();
	
	if(isset($_POST["export"])){
		
		$i = 0;
		$college = $_POST["filter_role"];
		
		if(empty($_POST["filter_role"])){
			$query = "SELECT tbl_schedule.*, tbl_faculty.first_name, tbl_faculty.last_name, tbl_college.college_short 
				FROM  tbl_schedule
				JOIN tbl_faculty ON tbl_schedule.faculty_id   = tbl_faculty.faculty_id 
				JOIN tbl_college ON tbl_faculty.college_id  = tbl_college.college_id 
				WHERE tbl_schedule.active_flag = '1'
				ORDER BY tbl_faculty.first_name ASC ";
		}
		
		else {  
		
			$query =  "SELECT tbl_schedule.*, tbl_faculty.first_name, tbl_faculty.last_name, tbl_college.college_short 
				FROM  tbl_schedule
				JOIN tbl_faculty ON tbl_schedule.faculty_id   = tbl_faculty.faculty_id 
				JOIN tbl_college ON tbl_faculty.college_id  = tbl_college.college_id 
				WHERE tbl_schedule.active_flag = '1' AND tbl_college.college_id = '$college'
				ORDER BY tbl_faculty.first_name ASC ";
		}
		
		$result = mysqli_query($con, $query) or die("database error:". mysqli_error($con));
		$filterQuery = array();
		while( $row = mysqli_fetch_assoc($result) ) {
			$filterQuery[] = $row;
		}
		
		//exporting here
		$fileName = "CEL_Report_".date('Ymd') . ".csv";
		
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$fileName");
		header("Content-Type: application/csv;");
		
		$file = fopen('php://output', 'w');
		$header = array("No.", "Faculty Name", "College", "Subject Code", "Subject Description", "Section", "Schedule", "Time Start", "Time End");
		
		fputcsv($file, $header);  
		
		if(count($filterQuery)) {
			
			foreach($filterQuery as $row) {
				$rowData = array();
				$i = $i + 1;
				
				$firstname = $row['first_name'];
				$lastname = $row['last_name'];
				$name = $firstname." ".$lastname;
				
				$term = $row["term_period"];
				
				if($term == "1"){
					$schedule = "September 12, 2022";
				}
				else if ($term == "2"){
					$schedule = "October 25, 2022";
				}
				else if ($term == "3"){
					$schedule = "December 09, 2022";
				}
				
				$rowData[] = $i;
				$rowData[] = $name;
				$rowData[] = $row["college_short"];
				$rowData[] = $row["subject_code"];
				$rowData[] = $row["subject_desc"];
				$rowData[] = $row["section"];
				$rowData[] = $schedule;
				$rowData[] = $row["schedule_time1"];
				$rowData[] = $row["schedule_time2"];
				fputcsv($file, $rowData);
			}	
		}
		
		else {
			$rowData = array ("No data");
			fputcsv($file, $rowData);
		}
		
		fclose($file);
		exit;
		
	}
	
?>