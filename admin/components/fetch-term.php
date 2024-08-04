<?php
	error_reporting (E_ALL ^ E_NOTICE);
	session_start();
	include '../../connect.php';	

	$columns = array('acad_id','acad_period', 'acadyear_one', 'acadyear_two', 'acad_id');
	
	$query = "SELECT * FROM tbl_academic_year WHERE delete_flag='0' ";
	
	if(isset($_POST["search"]["value"])){
		$query .= 'AND (acad_period LIKE "%'.$_POST["search"]["value"].'%" 
					OR acadyear_one LIKE "%'.$_POST["search"]["value"].'%" 
					OR acadyear_two LIKE "%'.$_POST["search"]["value"].'%" 
		)';
	}
	
	if(isset($_POST["order"])){
		$query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
	}
	else{
		$query .= 'ORDER BY default_flag DESC, acadyear_one ASC ';
	}
	
	$query1 = '';
	
	if($_POST["length"] != -1){
		$query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
	}
	
	$number_filter_row = mysqli_num_rows(mysqli_query($con, $query));
	
	$result = mysqli_query($con, $query . $query1);
	
	$data = array();
	$i = 0;
	
	while($row = mysqli_fetch_array($result)){
		$sub_array = array();
		$i = $i + 1;
		
		$acad_period = $row["acad_period"];
		$acadyear_one = $row["acadyear_one"];
		$acadyear_two = $row["acadyear_two"];
		
		$default = $row["default_flag"];
		
		if($acad_period == '1'){
			$acad_period_title = "1st Semester";
		}
		else if($acad_period == '2'){
			$acad_period_title = "2nd Semester";
		}
		else if($acad_period == '3'){
			$acad_period_title = "3rd Semester / Summer";
		}
		
		//check if they are the current data
		if($default == '0'){
			$style = "style='color:#878787'";		
			$flag = "btn btn-default btn-xs inactive_flg";
			
			$current_value = "Set to Current";
			$current_name = "set";
		}
		
		else{
			$style = "style='color:#121212'";	 
			$flag = "btn btn-danger btn-xs active_flg";
			
			$current_value = "Unset to Current";
			$current_name = "unset";
		}
		
		$sub_array[] = '<div data-id="'.$row["acad_id"].'" data-column="acad_id "'.$style.'"">' . $i . '</div>';
		$sub_array[] = '<div data-id="'.$row["acad_id"].'" data-column="acad_period "'.$style.'">' . $acad_period_title . '</div>';
		$sub_array[] = '<div data-id="'.$row["acad_id"].'" data-column="acadyear_one "'.$style.'">' . $acadyear_one . '</div>';
		$sub_array[] = '<div data-id="'.$row["acad_id"].'" data-column="acadyear_two "'.$style.'">' . $acadyear_two . '</div>';
		
		$sub_array[] = '<button type="button" name="edit"  class="edit '.$flag.'"  id="'.$row["acad_id"].'">Edit</button>
						<button type="button" name="delete" class="delete '.$flag.'" id="'.$row["acad_id"].'">Delete</button>
						<button type="button" name="current"  class="'.$current_name." ".$flag.'"  id="'.$row["acad_id"].'">'.$current_value.'</button> ';
		
		$data[] = $sub_array;
	}
	
	function get_all_data($con){
		$query = "SELECT * FROM tbl_academic_year WHERE delete_flag='0' ";
		$result = mysqli_query($con, $query);
		return mysqli_num_rows($result);
	}
	
	$output = array(
		"draw"    => intval($_POST["draw"]),
		"recordsTotal"  =>  get_all_data($con),
		"recordsFiltered" => $number_filter_row,
		"data"    => $data
	);
	
	echo json_encode($output);
?>