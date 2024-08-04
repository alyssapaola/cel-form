<?php  
	error_reporting (E_ALL ^ E_NOTICE);
	session_start();
	include '../../connect.php';
	
	if(isset($_POST["schedule_id"]))  {  
		
		$schedule_id = $_POST["schedule_id"];
		
		//get faculty details
		$queryUser = "SELECT tbl_faculty.first_name, tbl_faculty.last_name, tbl_college.college_full
				FROM  tbl_schedule 
				JOIN tbl_faculty ON tbl_schedule.faculty_id   = tbl_faculty.faculty_id 
				JOIN tbl_college ON tbl_faculty.college_id  = tbl_college.college_id 
				WHERE tbl_schedule.schedule_id = '$schedule_id'";
		$resultUser = mysqli_query($con, $queryUser);  
		while($rowUser = mysqli_fetch_array($resultUser)) {
			$firstname = $rowUser['first_name'];
			$lastname = $rowUser['last_name'];
			$college = $rowUser['college_full'];
			$name = $firstname." ".$lastname;
		}
		
		$output = '';  
		
		$output .= '  
		<div class="table-responsive">  
			<table class="table table-bordered">';  
		
		$output .= '  
				<tr>  
					<td width="30%"><label>Faculty Name</label></td>  
					<td width="70%">'.$name.'</td>  
				</tr>  
				<tr>  
					<td width="30%"><label>College/Department</label></td>  
					<td width="70%">'.$college.'</td>  
				</tr>  
				<tr>  
					<td colspan="2"><input type="hidden" name="schedule_id" value="'.$schedule_id.'"> </td>
				</tr>
		';  
		
		$query = "SELECT * FROM  tbl_schedule WHERE tbl_schedule.schedule_id = '$schedule_id'";
		$result = mysqli_query($con, $query);  
		while($row = mysqli_fetch_array($result)) {
			$term = $row['term_period'];
			
			if ($term == "1"){
				$label =  "Prelim Date";
				$schedule_date = "September 12, 2022";
			}
			else if ($term == "2"){
				$label =  "Midterm Date";
				$schedule_date = "October 25, 2022";
			}
			else if ($term == "3"){
				$label =  "Finals Date";
				$schedule_date = "December 09, 2022";
			}
			
			$output .= '
				<tr>  
					<td width="30%"><label>'.$label.'</label></td>  
					<td width="70%">'.$schedule_date.'</td>  
				</tr>
				<tr>  
					<td width="30%"><label>Subject Code</label></td>  
					<td width="70%">'.$row["subject_code"].'</td>  
				</tr>  
				<tr>  
					<td width="30%"><label>Subject Description</label></td>  
					<td width="70%">'.$row["subject_desc"].'</td>  
				</tr>  
				<tr>  
					<td width="30%"><label>Section</label></td>  
					<td width="70%">'.$row["section"].'</td>  
				</tr>  
				<tr>  
					<td width="30%"><label>Schedule Time</label></td>  
					<td width="70%">'.$row["schedule_time1"].' - '.$row['schedule_time2'].'</td>  
				</tr>  
				<tr>  
					<td colspan="2"></td>
				</tr> 
				
			';  
		}  
	
		$output .= '
			</table>  
		</div>'; 
		
		echo $output;  

	}  
	
 ?>