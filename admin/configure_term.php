<?php  
	include '../connect.php';
	error_reporting (E_ALL ^ E_NOTICE);
	session_start();
 
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
		
		<!-- DateTime picker -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

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
		
		<!-- Stylesheet for DataTable -->
		.active_flg {
			background-color: #940000;
			color: white;
			border: 2px solid #940000;
		}
		.active_flg:hover{color:#fff;background-color:#EE0000;border-color:#940000}
		
		.inactive_flg {
			background-color: #474747;
			color: white;
			border: 2px solid #474747;
		}
		.inactive_flg:hover{color:#333;background-color:#e6e6e6;border-color:#474747}
		
	</style>
	
	<body>
		<!-- ======= Header ======= -->
		<header id="header" class="fixed-top d-flex align-items-center">
		
			<div class="container d-flex align-items-center">
				<h1 class="logo me-auto"><a href="index.php">Center for Technology-Enabled Education</a></h1>
				
				<nav id="navbar" class="navbar order-last order-lg-0">
					<ul>
						<li><a class="nav-link scrollto" href="index.php">Home</a></li>
						<li class="dropdown"><a class="nav-link scrollto active" href="#">Configure</a>
							<ul>
								<li><a class="nav-link scrollto" href="configure_term.php">Add Academic Term</a></li>
								<li><a class="nav-link scrollto" href="configure_college.php">Add College</a></li>
								<li><a class="nav-link scrollto" href="configure_faculty.php">Add New Instructor</a></li>
								<li><a class="nav-link scrollto" href="configure_date.php">Add New Asynchronous Date</a></li>
							</ul>
						</li>
						<li><a class="nav-link scrollto" href="report.php">Report</a></li>
					</ul>
					<i class="bi bi-list mobile-nav-toggle"></i>
				</nav>
				
			</div>
		</header><!-- End Header -->
	
		
		<main id="main">
			<!-- ======= About Section ======= -->
			<section id="about" class="about">
		
				<div class="container">
				
					<div class="about-content" style="text-align:left;" >
					
						<h2>Configuration</h2>
						<h5>Academic Term</h5>
						
					</div>
					
					<div class="about-content" style="text-align:justify; padding-top:10px;">
							
						<div class="table-responsive">
							
							<div align="left">  
								<button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-danger">Add</button>  
							</div>
							
							<br>
							
							<div id="alert_message"></div>
							
							<div id="employee_table">  
								<table id="user_data" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>No</th>
											<th>Academic Term</th>
											<th>Start Year</th>
											<th>End Year</th>
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
		
		
		<div id="dataModal" class="modal fade">  
			<div class="modal-dialog">  
				<div class="modal-content">  
				
					<form method = "post">
						<div class="modal-header">  
							<button type="button" class="close" data-dismiss="modal">&times;</button>  
							<h4 class="modal-title">Class Details</h4>  
						</div>  
						
						<div class="modal-body" id="employee_detail">  </div>  
						
						<div class="modal-footer">  
							<input type="submit" name="generate_pdf" value="Export" class="btn btn-info"  />
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
						</div>  
					</form>
					
				</div>  
			</div>  
		</div>  
		
		<!--==========================
			Add Modal
		============================-->
		
		<div id="add_data_Modal" class="modal fade">  
			<div class="modal-dialog">  
				<div class="modal-content">  
				
					<form method = "post" id="insert_form">
						
						<div class="modal-header">  
							<button type="button" class="close" data-dismiss="modal">&times;</button>  
							<h4 class="modal-title">Create New Account</h4>  
						</div>  
						
						<div class="modal-body">  
							<label><strong>Period</strong> <font color="red" style="font-weight: bold;">*</font> </label>  
							<select name="semester" id="semester" class="form-control" required>
								<option value="">Select Semester</option>
								<option value="1">1st Semester</option>
								<option value="2">2nd Semester</option>
								<option value="3">3rd Semester / Summer</option>
							</select>
							<br />  
							
							<label><strong>Start Academic Year </strong> <font color="red" style="font-weight: bold;">*</font> </label>  
							<div class='input-group date' id='datetimepicker1'>
								<input type="text" class="form-control" name="year_one" id="year_one" required>
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
							</div>
							<br />  
							
							<label><strong>End Academic Year </strong> <font color="red" style="font-weight: bold;">*</font> </label>  
							<div class='input-group date' id='datetimepicker2'>
								<input type="text" class="form-control" name="year_two" id="year_two" required>
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
							</div>
							<br />  
							
							<input type="checkbox" name="status" id="status"  >
							<label><strong>Set as Current?</strong> <font color="red" style="font-weight: bold;"></font></label>
							<input type="text" name="flag" id="flag" class="form-control" size="25" >
							<br/>
							
							<input type="text" name="acad_id" id="acad_id" /> 
						</div>  
						
						<div class="modal-footer">  
							<input type="submit" name="insert" id="insert" value="Insert" class="btn btn-danger" />  
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
						</div>  
						
					</form>
					
				</div>  
			</div>  
		</div>  
		
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
		
		$(function() {
			$('#datetimepicker1').datetimepicker({
                format: 'YYYY'
            });
		});
		
		$(function() {
			$('#datetimepicker2').datetimepicker({
                format: 'YYYY'
            });
		});
			
		function fetch_data(){
			var dataTable = $('#user_data').DataTable({
				"processing" : true,
				"serverSide" : true,
				"order" : [],
				"ajax" : {
					url:"components/fetch-term.php",  
					type:"POST"
				}
			});
		}
		
		$('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#insert_form')[0].reset();  
		});
		
		$(document).on('click', '.edit', function(){  
			var id = $(this).attr("id");  
			
			$.ajax({  
                url:"components/write-term.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"json",  
                success:function(data){  
                    $('#semester').val(data.acad_period); 
					$('#year_one').val(data.acadyear_one); 
					$('#year_two').val(data.acadyear_two); 
					$('#acad_id ').val(data.acad_id ); 
					
					$('#flag').val(data.default_flag); 
				
					//0 not; 1 default;
					if($('#flag').val() == "1"){
						$('#status').prop('checked', true);
					}
					else{
						$('#status').prop('checked', false);
					}
					
                    $('#insert').val("Update");  
                    $('#add_data_Modal').modal('show');  
                }  
			});  
		});  
		
		$('#insert_form').on("submit", function(event){  
			event.preventDefault();  
			
			var semester = $("#semester").val();
			var year_one = parseInt($("#year_one").val());
			var year_two = $("#year_two").val();
			var status = $("#status").val();
			
			var valid_year_two = year_one + 1;
			var msg = "";
			
			if(year_one > year_two || year_two != valid_year_two){
				$('#year_two').css('border', '1px solid red');
				msg = "Invalid year";
			}
			
			if (msg != ""){
				alert(msg);  
			}
			else{
				$.ajax({
					url : "components/check-term.php",
					type : "POST",
					cache:false,
					data:$('#insert_form').serialize(),  
					success:function(result){
						if (result != ""){
							
						}
						
						
						//if (result == 0) {
							//alert("Record already existing");
							alert(result);
							//$('#alert_message').html('<div class="alert alert-success">'+result+'</div>');
						//}
						
						//else{
						//	alert("ok");
							/*
							$.ajax({  
								url:"components/insert-term.php",
								method:"POST",  
								data:$('#insert_form').serialize(),  
								beforeSend:function(){  
								  $('#insert').val("Inserting");  
								},  
								success:function(data){  
								  $('#insert_form')[0].reset();  
								  $('#add_data_Modal').modal('hide');  
								  $('#employee_table').html(data);  
								}  
							});  
							*/
						//}
						
					}
				});
			}
			
		});
		
		$(document).on('click', '.delete', function(){
			var id = $(this).attr("id");
		
			if(confirm("Are you sure you want to remove this?")){
				$.ajax({
					url:"components/delete-term.php",
					method:"POST",
					data:{id:id},
					success:function(data){
						$('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
						$('#user_data').DataTable().destroy();
						fetch_data();
					}
				});
				
				setInterval(function(){
					$('#alert_message').html('');
				}, 5000);
			}
		});
		
		$(document).on('click', '.set', function(){
			var id = $(this).attr("id");
			
			if(confirm("Are you sure you want to set this as the current academic term?")){
				$.ajax({
					url:"components/set-term.php",
					method:"POST",
					data:{id:id},
					success:function(data){
						$('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
						
						//For wait 1.5 seconds
						setTimeout(function(){
							location.reload();  //Refresh page
						}, 1500);
						
						$('#user_data').DataTable().destroy();
						fetch_data();
					}
				});
				
			}
		});
		
		$(document).on('click', '.unset', function(){
			var id = $(this).attr("id");
			
			if(confirm("Are you sure you want to unset this as the current academic term? \nThis will hide all the events related to this term.")){
				$.ajax({
					url:"components/unset-term.php",
					method:"POST",
					data:{id:id},
					success:function(data){
						$('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
						
						//For wait 1.5 seconds
						setTimeout(function(){
							location.reload();  //Refresh page
						}, 1500);
						
						$('#user_data').DataTable().destroy();
						fetch_data();
					}
				});

			}
		});
		
		
		
	});
</script>