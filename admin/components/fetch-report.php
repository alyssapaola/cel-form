<?php
	error_reporting (E_ALL ^ E_NOTICE);
	session_start();
	include '../../connect.php';
	
	$columns = array('sched_id', 'name', 'college', 'sched_id');
	
	$query = "SELECT tbl_schedule.schedule_id, tbl_faculty.first_name, tbl_faculty.last_name, tbl_college.college_short 
				FROM  tbl_schedule
				JOIN tbl_faculty ON tbl_schedule.faculty_id   = tbl_faculty.faculty_id 
				JOIN tbl_college ON tbl_faculty.college_id  = tbl_college.college_id 
				WHERE tbl_schedule.active_flag = '1' ";
	
	
	if(isset($_POST['filter_role']) && $_POST['filter_role'] != ''){
		$query .= 'AND tbl_college.college_id = "'.$_POST['filter_role'].'" ';
	}
	
	if(isset($_POST["search"]["value"])){
		$query .= 'AND (tbl_faculty.first_name LIKE "%'.$_POST["search"]["value"].'%"
					OR tbl_faculty.last_name LIKE "%'.$_POST["search"]["value"].'%"
					OR tbl_faculty.faculty_id  LIKE "%'.$_POST["search"]["value"].'%" )';
	}
	
	
	if(isset($_POST["order"])){
		$query .= 'GROUP BY tbl_schedule.faculty_id ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
	}
	else{
		$query .= 'GROUP BY tbl_schedule.faculty_id ORDER BY tbl_faculty.first_name ASC ';
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
		
		$firstname = $row['first_name'];
		$lastname = $row['last_name'];
		$name = $firstname." ".$lastname;
		$college = $row['college_short'];
		
		$sub_array[] = '<div data-id="'.$row["schedule_id"].'" data-column="sched_id">' . $i . '</div>';
		$sub_array[] = '<div data-id="'.$row["schedule_id"].'" data-column="name">' .  $name. '</div>';
		$sub_array[] = '<div data-id="'.$row["schedule_id"].'" data-column="college">' . $college. '</div>';
		$sub_array[] = '<button type="button" name="view" class="view btn btn-danger btn-xs" id="'.$row["schedule_id"].'">View</button>';
		
		$data[] = $sub_array;
	}
	
	function get_all_data($con){
		$query = "SELECT tbl_schedule.id, tbl_faculty.first_name, tbl_faculty.last_name, tbl_college.college_short 
				FROM  tbl_schedule
				JOIN tbl_faculty ON tbl_schedule.faculty_id   = tbl_faculty.faculty_id 
				JOIN tbl_college ON tbl_faculty.college_id  = tbl_college.college_id 
				WHERE tbl_schedule.active_flag = '1' ";
	
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