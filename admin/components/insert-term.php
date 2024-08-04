<?php  
	error_reporting (E_ALL ^ E_NOTICE);
	session_start();
	include '../../connect.php';

	//if update/insert button is clicked
	if(!empty($_POST)){  
	
		//variable initialization
		$output = '';  
		$message = '';  
		
		$semester = mysqli_real_escape_string($con, $_POST["semester"]);
		$year_one = mysqli_real_escape_string($con, $_POST["year_one"]);
		$year_two = mysqli_real_escape_string($con, $_POST["year_two"]);
		
		if(isset($_POST['status'])){
			$status = "1";
			
			//check if there's a current, then unset the current:
			$current_qry = "SELECT acad_id FROM tbl_academic_year WHERE default_flag = '1'";
			$current_rslt = mysqli_query($con, $current_qry);
			if(mysqli_num_rows($current_rslt) > 0){ 
				while($row = mysqli_fetch_array($current_rslt)){
					$update_qry = "UPDATE tbl_academic_year SET default_flag = '0' WHERE acad_id = '".$row["acad_id"]."'";
					mysqli_query($con, $update_qry);
				}
			}
			
		}
		else{
			$status = "0";
		}
		
		//get user_id
		$countQuery = "SELECT acad_id, COUNT(*) as total FROM tbl_academic_year";
		$countRslt = mysqli_query($con, $countQuery);
		if(mysqli_num_rows($countRslt) > 0){
			while($row = mysqli_fetch_assoc($countRslt)){
				$total = $row['total'];
				$total = $total+1;
				$counter = str_pad($total, 3, '0', STR_PAD_LEFT);
				$acad_id_db = "ACAD".$counter;
			}
		}
		
		//if edit record
		if($_POST["acad_id"] != ''){ 
			$query = "UPDATE tbl_academic_year 
						SET acad_period='$semester', acadyear_one='$year_one', acadyear_two='$year_two', default_flag = '$status' 
						WHERE acad_id='".$_POST["acad_id"]."'";  
			$message = 'Data Updated';  
		}
		
		//if new record	
		else{  
			
			$query = "INSERT INTO tbl_academic_year (acad_id, acad_period, acadyear_one, acadyear_two, default_flag, delete_flag) 
						VALUES ('$acad_id_db', '$semester', '$year_one', '$year_two', '$status', '0')";
			$message = 'Data Inserted'; 
		
		}
		
		
		if ($query!=""){
			if(mysqli_query($con, $query)){  
				echo "<script language='JavaScript'>
					alert('".$message."');
					window.location.reload();
				</script>";
			}
		}
		
	}  
?>