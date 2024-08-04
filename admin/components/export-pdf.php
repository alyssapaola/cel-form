<?php  
	
	function fetch_data() {  
		
		$schedule_id = $_POST["schedule_id"];
		$output = '';  
		$i = 0;
		
		$con = mysqli_connect("localhost", "root", "") or die("Connection Problem" . mysqli_errno($con));
		$database = mysqli_select_db($con, "db_cel_form") or die("SQL Problem" . mysqli_error($con));
		
		$sql = "SELECT * FROM  tbl_schedule WHERE schedule_id = '$schedule_id'";
		$result = mysqli_query($con, $sql) or die("database error:". mysqli_error($con)); 
		while($row = mysqli_fetch_array($result))  {     
			$term = $row['term_period'];
			$i = $i + 1;
			
			if ($term == "1"){
				$label =  "Prelim";
				$schedule_date = "September 12, 2022";
			}
			else if ($term == "2"){
				$label =  "Midterm";
				$schedule_date = "October 25, 2022";
			}
			else if ($term == "3"){
				$label =  "Finals";
				$schedule_date = "December 09, 2022";
			}
			
			$schedule_time = $row['schedule_time1']." - ".$row['schedule_time2'];
			
			$output .= '<tr>  
				<td>'.$i.'</td>  
				<td>'.$row["subject_code"].'</td>  
				<td>'.$row["subject_desc"].'</td>  
				<td>'.$row["section"].'</td>  
				<td>'.$label.'</td> 
				<td>'.$schedule_date.'</td>  
				<td>'.$schedule_time.'</td>  
				 
			</tr>';  
		} 

		return $output;  
	}  
	
	function fetch_user() {  
		
		$schedule_id = $_POST["schedule_id"];
		$output1 = '';  
		
		$con = mysqli_connect("localhost", "root", "") or die("Connection Problem" . mysqli_errno($con));
		$database = mysqli_select_db($con, "db_cel_form") or die("SQL Problem" . mysqli_error($con));
		
		$sql1 =  "SELECT tbl_faculty.first_name, tbl_faculty.last_name, tbl_college.college_full
				FROM  tbl_schedule 
				JOIN tbl_faculty ON tbl_schedule.faculty_id   = tbl_faculty.faculty_id 
				JOIN tbl_college ON tbl_faculty.college_id  = tbl_college.college_id 
				WHERE tbl_schedule.schedule_id = '$schedule_id'";
		$result1 = mysqli_query($con, $sql1) or die("database error:". mysqli_error($con)); 
		while($row1 = mysqli_fetch_array($result1))  {     
			$firstname = $row1['first_name'];
			$lastname = $row1['last_name'];
			$_SESSION['lastname'] = $lastname;
			$college = $row1['college_full'];
			$name = $firstname." ".$lastname;
		}
		
		$output1 .= 'Faculty Name: '.$name.'<br />';
		$output1 .= 'College: '.$college.'<br /><br/>';
		
		return $output1;  
	}  
	
	if(isset($_POST["generate_pdf"]))  {  
	
		require_once('../assets/tcpdf/tcpdf.php');  
		
		$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
		$obj_pdf->SetCreator(PDF_CREATOR);  
		$obj_pdf->SetTitle("Schedule for Asynchronous Classes");  
		$obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
		$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
		$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
		$obj_pdf->SetDefaultMonospacedFont('helvetica');  
		$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
		$obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
		$obj_pdf->setPrintHeader(false);  
		$obj_pdf->setPrintFooter(false);  
		$obj_pdf->SetAutoPageBreak(TRUE, 10);  
		$obj_pdf->SetFont('Times', '', 12);  
		$obj_pdf->AddPage();  
		
		$content = '';  
		
		$content .= '<h2 align="center">Center for Technology-Enabled Education</h2><br />';
		$content .= '<h4 align="center">Schedule for Asynchronous Class</h4><br />';
		$content .= '<h4 align="center">1st Semester AY 2022-2023</h4><br /><p>';
		
		$content .= fetch_user();  
		
		$content .= '  
			<table border="1" cellspacing="0" cellpadding="3">  
				<tr style="font-weight:bold">  
					<th width="5%">No</th>  
					<th>Subject Code</th>  
					<th width="25%">Subject Description</th>  
					<th>Section</th>  
					<th>Period</th>  
					<th>Schedule Date</th> 
					<th>Schedule Time</th> 
				</tr>  
		';  
		
		$content .= fetch_data();  
		
		$content .= '</table>';  
		
		$obj_pdf->writeHTML($content);  
		
		$lastname = $_SESSION['lastname'];
		$fileName = $lastname."_".date('Ymd');
		
		$obj_pdf->Output("$fileName.pdf", "D");  
		
	}  
	
 ?>  
