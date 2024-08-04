<?php  
	include '../connect.php';
	error_reporting (E_ALL ^ E_NOTICE);
	session_start();
 
	//FOR COLLEGE FILTER SELECT OPTION
	$college_info = '';
	$query_1 = "SELECT * FROM tbl_college WHERE active_flag='1' ORDER BY college_short ASC";
	$statement_1 = $connect->prepare($query_1);
	$statement_1->execute();
	$result_1 = $statement_1->fetchAll();
	foreach($result_1 as $row){
		$college_id = $row['college_id'];
		$college_shortname = $row["college_short"];
		$college_info .= '<option value="'.$college_id.'">'.$college_shortname.'</option>';
	}
	
	include 'components/export-excel.php';
	include 'components/export-pdf.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
	
		<title>Application for Asynchronous Class</title>
		<meta content="" name="description">
		<meta content="" name="keywords">
	
		<!-- Favicons -->
		<link href="../assets/img/favicon.png" rel="icon">
		<link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
		<link href="../assets/vendor/aos/aos.css" rel="stylesheet">
		
		<!-- Vendor CSS Files
		<link href="../assets/vendor/aos/aos.css" rel="stylesheet">
		<link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
		<link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
		<link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
		-->
		
		<!-- Template Main CSS File -->
		<link href="../assets/css/style.css" rel="stylesheet">
		
		<!-- Stylesheet/JS file for DataTable  -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
		<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

		<!-- =======================================================
		* Template Name: Rapid - v4.9.0
		* Template URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
		* Author: BootstrapMade.com
		* License: https://bootstrapmade.com/license/
		======================================================== -->
	</head>
	
	<style>
		#about{
			padding-bottom: 100px;	
		}
		.about-content{
			margin: auto;
			width: 80%;
		}
		#navbar{
			width: 250px;
		}
		
		/* For header menu*/
		#header{
			padding: 20px;
			background: #B02D37;
			height: 120px;
		}
		#navbar a{
			color: #FFFFFF;
		}
		#navbar a:hover{
			color: #000000;
		}
		#navbar .active{
			color: #FFFFFF;
			text-decoration: underline;
		}
		
		/* For select filter_role setting */
		#filter_role {
			width:275px;  
			height:40px;line-height:30px;    
		}
		/* Create two equal columns that floats next to each other */
		.form-group {
			float: left;
			width: 30%;
			padding: 20px;
		}

		/* Clear floats after the columns */
		.row:after {
			content: "";
			display: table;
			clear: both;
		}

		@media screen and (max-width: 600px) {
			.column {
				width: 100%;
			}	
		}
	</style>
	
	<body>
		<!-- ======= Header ======= -->
		<header id="header" class="fixed-top d-flex align-items-center">
		
			<div class="container d-flex align-items-center">
				<h1 class="logo me-auto"><a href="index.php">Center for Technology-Enabled Education</a></h1>
				
				<nav id="navbar" class="navbar order-last order-lg-0">
					<ul>
						<li><a class="nav-link scrollto" href="index.php">Home</a></li>
						<li class="dropdown"><a class="nav-link scrollto" href="#">Configure</a>
							<ul>
								<li><a class="nav-link scrollto" href="configure_term.php">Add Academic Term</a></li>
								<li><a class="nav-link scrollto" href="configure_college.php">Add College</a></li>
								<li><a class="nav-link scrollto" href="configure_faculty.php">Add New Instructor</a></li>
								<li><a class="nav-link scrollto" href="configure_date.php">Add New Asynchronous Date</a></li>
							</ul>
						</li>
						<li><a class="nav-link scrollto active" href="report.php">Report</a></li>
					</ul>
					<i class="bi bi-list mobile-nav-toggle"></i>
				</nav>
				
			</div>
		</header><!-- End Header -->
	
		
		<main id="main">
			<!-- ======= About Section ======= -->
			<section id="about" class="about">
		
				<div class="container">
				
					<div class="about-content" style="text-align:center;" >
					
						<h2>Reports</h2>
						<h5>Asynchronous Classes First Semester AY 2022-2023</h5>
						
					</div>
					
					<div class="about-content" style="text-align:justify; padding-top:10px;">
							
						<div class="table-responsive">
							
							<form method = "post">
								<div class="row">
									<div class="form-group">
										<select name="filter_role" id="filter_role" class="form-control">
											<option value="">Select College</option>
											<?php echo $college_info; ?>
										</select>
									</div>
								
									<div class="form-group" style="padding-top:-20px; " >
										<button type="button" name="filter" id="filter" class="btn btn-danger" style="height:35px; width:60px;">Filter</button>
										<button type="button" name="add" id="add" class="btn btn-danger" onclick="window.location.href='intp-assignment-add.php'" style="height:35px; width:60px;">Add</button>
										<input type="submit" name="export" value="Export" class="btn btn-danger"  style="height:35px; width:70px;" />
									</div>
								</div>
							</form>
							
							<div id="alert_message"></div>
							
							<div id="employee_table">  
								<table id="user_data" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>No</th>
											<th>Faculty Name</th>
											<th>College/Department</th>
											<th>Action</th>
										</tr>
									</thead>
								</table>
							</div>
							
						</div>
						
					</div>					
				</div>
			</section><!-- End About Section -->
		
		</main><!-- End #main -->
		
		<!--==========================
			View Modal
		============================-->
		
		<form method = "post">
		<div id="dataModal" class="modal fade">  
			<div class="modal-dialog">  
				<div class="modal-content">  
					<div class="modal-header">  
						<button type="button" class="close" data-dismiss="modal">&times;</button>  
						<h4 class="modal-title">Class Details</h4>  
					</div>  
					
					<div class="modal-body" id="employee_detail">  </div>  
					
					<div class="modal-footer">  
						<input type="submit" name="generate_pdf" value="Export" class="btn btn-info"  />
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
					</div>  
				</div>  
			</div>  
		</div>  
		</form>
		
		<!-- ======= Footer ======= -->
		<footer id="footer" class="section-bg">
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="row">
								<div class="col-sm-6">
									<div class="footer-info">
										<h4>Contact Us</h4>
										<p>
											Center for Technology-Enabled Education (CEL)<br>
											2/F East Blg.<br>
											Lyceum of the Philippines University - Cavite <br>
											<strong>Phone:</strong> (046) 481-1413<br>
											<strong>Email:</strong> lpuc_ctee@lpu.edu.ph<br>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
			<div class="container">
				<div class="copyright">
					&copy; Copyright <strong>Rapid</strong>. All Rights Reserved
				</div>
				<div class="credits">
					<!--
					All the links in the footer should remain intact.
					You can delete the links only if you purchased the pro version.
					Licensing information: https://bootstrapmade.com/license/
					Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
					-->
					Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
				</div>
			</div>
		</footer><!-- End  Footer -->
		
		<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
		
		<!-- Template Main JS File -->
		<script src="../assets/js/main.js"></script>
	
	</body>
</html>


<script type="text/javascript" language="javascript" >
	$(document).ready(function(){
		fetch_data();
		
		function fetch_data(filter_role = ''){
			var dataTable = $('#user_data').DataTable({
				"processing" : true,
				"serverSide" : true,
				"order" : [],
				"searching" : true,
				"ajax" : {
					url:"components/fetch-report.php",  
					type:"POST",
					data:{
						filter_role:filter_role
					}
				}
		   });
		}
		
		$('#filter').click(function(){
			var filter_role = $('#filter_role').val();
			
			if(filter_role != ''){
				$('#user_data').DataTable().destroy();
				fetch_data(filter_role);
			}
			else{
				$('#user_data').DataTable().destroy();
				fetch_data();
			}
		});
	  
		
	  
		$(document).on('click', '.view', function(){  
           var schedule_id = $(this).attr("id");  
		   
           if(schedule_id != ''){  
                $.ajax({  
                    url:"components/view-report.php",  
                    method:"POST",  
                    data:{schedule_id:schedule_id},  
                    success:function(data){  
                        $('#employee_detail').html(data);  
						$('#dataModal').modal('show');  
                    }  
                });  
			}            
		});
		
		
		
		
	});
</script>