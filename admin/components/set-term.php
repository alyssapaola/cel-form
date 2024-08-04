<?php
	error_reporting (E_ALL ^ E_NOTICE);
	session_start();
	include '../../connect.php';
	
	if(isset($_POST["id"])){
		
		//check if there's a current:
		$current_qry = "SELECT acad_id FROM tbl_academic_year WHERE default_flag = '1'";
		$current_rslt = mysqli_query($con, $current_qry);
		if(mysqli_num_rows($current_rslt) > 0){ 
			while($row = mysqli_fetch_array($current_rslt)){
				$update_qry = "UPDATE tbl_academic_year SET default_flag = '0' WHERE acad_id = '".$row["acad_id"]."'";
				mysqli_query($con, $update_qry);
			}
		}
	
	
		$query = "UPDATE tbl_academic_year SET default_flag = '1' WHERE acad_id = '".$_POST["id"]."'";
		
		if(mysqli_query($con, $query)){
			echo 'Data Updated';
		}
	}
?>