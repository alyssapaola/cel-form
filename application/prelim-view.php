<?php
	include '../connect.php';
	error_reporting (E_ALL ^ E_NOTICE);
	session_start();
	
	if(!isset($_SESSION["faculty_name"]) || $_SESSION["faculty_name"] == "" ){
		header("location: ../index.php");
		exit;	
	}
	else{
		
		$faculty_name = $_SESSION['faculty_name'];
		//checking of id here
		include 'components/check.php';
		
		// Check if the user is logged in, if not then redirect him to login page
		if($record == "1" ){
			echo "<script type='text/javascript' language='javascript' >
				alert('You have already accomplished this form. Redirecting you to the main page')
				window.location.replace('../index.php');
			</script>";
		}
	}
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
	
		<!-- Vendor CSS Files -->
		<link href="../assets/vendor/aos/aos.css" rel="stylesheet">
		<link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
		<link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
		<link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
		
		<!-- Template Main CSS File -->
		<link href="../assets/css/style.css" rel="stylesheet">
		
		<!-- DateTime picker -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
			padding-top: 100px;	
			padding-bottom: 200px;	
		}
		.about-content{
			margin: auto;
			width: 80%;
		}
		.mb-3 {
			display: table;
			margin: 0 auto;
			width: 70%;
		}
		.info {
			font-size: .8em;
			color: #ff0000;
			padding-left: 5px;
		}
		.col-sm-6{
			width: 80%;
		}
		
		#header.header-transparent{
			background: #B02D37;
		}
		#header.header-transparent .logo a{
			color: #fff;
		}
		.navbar .active, .navbar .active:hover{
			color: #fff;
			font-size: 20px;
		}
		.navbar{
			margin-bottom:-10px;
		}
	
		.info-flip, .info-flip a{
			background-color: #B02D37;
			color: #fff; 
			cursor: pointer;
		}
		.php-email-form input[type=button], .php-email-form input[type=submit] {
			width: 20%;
		}
		
	</style>
	
	<body>
		<!-- ======= Header ======= -->
		<header id="header" class="fixed-top d-flex align-items-center header-transparent">
		
			<div class="container d-flex align-items-center">
				<h1 class="logo me-auto"><a href="prelim-view.php">Center for Technology-Enabled Education</a></h1>
				
				<nav id="navbar" class="navbar order-last order-lg-0">
					<ul>
						<li><a class="nav-link scrollto active" href="../index.php">Exit</a></li>
					</ul>
					<i class="bi bi-list mobile-nav-toggle"></i>
				</nav>
				
			</div>
		</header><!-- End Header -->
	
		<main id="main">
			<!-- ======= About Section ======= -->
			<section id="about" class="about">
		
				<div class="container">
				
					<div class="about-content"  style="text-align:center;" >
						<h2>Online Registration for Asynchronous Classes </h2>
						<h5>1st Semester AY 2022-2023</h5>
					</div>
					
					<div class="about-content" style="text-align:justify; padding-top:10px;">
					
						<form method="post" action="" role="form" class="php-email-form" enctype="multipart/form-data">
							
							<div class="mb-3" style="">
								<h4>Prelim Schedule (September 12, 2022) </h4>
								<p style="margin-top:10px; font-size:11pt;">
									Hi, <b><?php echo $faculty_name; ?></b>. Do you have scheduled classes for this period?
									<span class="info-flip">Yes</span> 
									<span class="info-flip"><a href="midterm-view.php">No</a></span>
								</p>
							</div>
							
							<div class="mb-3 info-panel" style="display: none;" >
								<div id="TextBoxesGroup">
								<table class="table table-bordered" id="TextBoxDiv1">
										
										<tr >  
											<td colspan="2">Class Details #1</td>  
									
										</tr>
										
										<tr>  
											<td style="vertical-align: middle;">Subject Code</td>  
											<td>
												<input type="text" class="form-control" name="subject_code1" id="subject_code1"/>
											</td>
										</tr>
										<tr>  
											<td style="vertical-align: middle;">Subject Description</td>  
											<td>
												<input type="text" class="form-control" name="subject_desc1" id="subject_desc1"/>
											</td>
										</tr>
										<tr>  
											<td style="vertical-align: middle;">Section</td>  
											<td>
												<input type="text" class="form-control" name="section1" id="section1"/>
											</td>
										</tr>
										<tr>  
											<td style="vertical-align: middle;">Start Time</td>  
											<td  class='input-group date' id='datetimepicker_s1'>
												<input type='text' class="form-control" name="subject_starttime1" id="subject_starttime1" />
												<span class="input-group-addon">
												   <span class="glyphicon glyphicon-time"></span>
												</span>
											</td>
										</tr>
										<tr>  
											<td style="vertical-align: middle;">End Time</td>  
											<td  class='input-group date' id='datetimepicker_e1'>
												<input type='text' class="form-control" name="subject_endtime1" id="subject_endtime1" />
												<span class="input-group-addon">
												   <span class="glyphicon glyphicon-time"></span>
												</span>
											</td>
										</tr>
									
									</table>
									</div>
								<input type="button" value="Add Fields" id="addButton" title="Add Class Details"></input>
								<input type='button' value='Remove Fields' id='removeButton' title="Remove Class Details"></input>
								<input type='button' value='Save Changes' id='getButtonValue' title="Save the Form"></input>
								<input type="button" value="Next" id="nextButton" style="display: none;" title="Go to Next Page"></input>
							</div>
							
						</form>
						
					</div>					
				</div>
			</section><!-- End About Section -->
		
		</main><!-- End #main -->
		
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
		
		<!-- Vendor JS Files -->
		<script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
		<script src="../assets/vendor/aos/aos.js"></script>
		<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
		<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
		<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
			
		<!-- Template Main JS File -->
		<script src="../assets/js/main.js"></script>
	
	</body>
</html>

<script type="text/javascript" language="javascript" >
	$(document).ready(function() {
		$(".info-flip").click(function() {
			$(".info-panel").slideToggle("slow");
		});
		/*
		$(function() {
			$('#subject_date1').datetimepicker({
                format: 'MMMM DD, YYYY'
            });
		});
		*/
		$(function() {
			$('#datetimepicker_s1').datetimepicker({
                format: 'LT'
            });
		});
		
		$(function() {
			$('#datetimepicker_e1').datetimepicker({
                format: 'LT'
            });
		});
		
		//convert 12h to 24h
		const convertTime12to24 = time12h => {
			const [time, modifier] = time12h.split(" ");
			let [hours, minutes] = time.split(":");
			if (hours === "12") {
				hours = "00";
			}
			if (modifier === "PM") {
				hours = parseInt(hours, 10) + 12;
			}
			return `${hours}:${minutes}`;
		};
		
		//convert hr to min
		function toMinutes(time) {
			var b = time.split(':');
			return b[0]*60 + +b[1];
		}
		
		var counter = 2;
		
		$("#addButton").click(function () {
			if(counter>20){
				alert("Only 20 textboxes allow");
				return false;
			}   
			
			var newTextBoxDiv1 = $(document.createElement('table'));
			newTextBoxDiv1.attr("id", 'TextBoxDiv' + counter);
			newTextBoxDiv1.attr("class", 'table table-bordered');
			
			
			newTextBoxDiv1.after().html(
				'<tr>' +
					'<td colspan="2">Class Details #' + counter + '</td> ' +
				'</tr>' + 
				'<tr>' +
					'<td style="vertical-align: middle;">Subject Code</td>' +
					'<td><input type="text" class="form-control" name="subject_code' + counter + '" id="subject_code' + counter + '" value="" >' + 
				'</tr>' + 
				'<tr>' +
					'<td style="vertical-align: middle;">Subject Description</td>' +
					'<td><input type="text" class="form-control" name="subject_desc' + counter + '" id="subject_desc' + counter + '" value="" >' + 
				'</tr>' + 
				'<tr>' +
					'<td style="vertical-align: middle;">Section</td>' +
					'<td><input type="text" class="form-control" name="section' + counter + '" id="section' + counter + '" value="" >' + 
				'</tr>' + 
				'<tr>' +
					'<td style="vertical-align: middle;">Start Time</td>' +
					'<td  class="input-group date" id="datetimepicker_s' + counter + '">' +
						'<input type="text" class="form-control" name="subject_starttime' + counter + '" id="subject_starttime' + counter + '" value="" >' + 
						'<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>' +
				'</tr>' + 
				'<tr>' +
					'<td style="vertical-align: middle;">Start Time</td>' +
					'<td  class="input-group date" id="datetimepicker_e' + counter + '">' +
						'<input type="text" class="form-control" name="subject_endtime' + counter + '" id="subject_endtime' + counter + '" value="" >' + 
						'<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>' +
				'</tr>'
			);
	
			newTextBoxDiv1.appendTo("#TextBoxesGroup");
			/*
			$(function() {
				$('#subject_date' + counter).datetimepicker({
					format: 'MMMM DD, YYYY'
				});
			});
			*/
			$(function() {
				$('#datetimepicker_s' + counter).datetimepicker({
					format: 'LT'
				});
			});
			
			$(function() {
				$('#datetimepicker_e' + counter).datetimepicker({
					format: 'LT'
				});
			});
			
			counter++;
		});
		
		$("#getButtonValue").click(function () {
			
			var cnt_txtbox = '';
			var msg = '';
			//var arr = [];
			var arr = new Array(counter);
			 
			// Loop to create 2D array using 1D array
			for (var y = 0; y < counter; y++) {
				arr[y] = new Array(2);
			}
			
			for(i=1, x=0; i<counter; i++, x++){
			
				var subject_code = $('#subject_code'+ i).val();
				var subject_desc = $('#subject_desc'+ i).val();
				var section = $('#section'+ i).val();
				var subject_starttime = $('#subject_starttime'+ i).val();
				var subject_endtime = $('#subject_endtime'+ i).val();
				
				//check if no empty fields
				if (subject_code == "" || subject_desc == "" || section == "" || subject_starttime == "" || subject_endtime == "") {
					
					
					if(subject_code==""){
						$('#subject_code'+ i).css('border', '1px solid red');
					}
					
					if(subject_desc==""){
						$('#subject_desc'+ i).css('border', '1px solid red');
					}
					
					if(section==""){
						$('#section'+ i).css('border', '1px solid red');
					}
					
					if(subject_starttime==""){
						$('#subject_starttime'+ i).css('border', '1px solid red');
					}
					
					if(subject_endtime==""){
						$('#subject_endtime'+ i).css('border', '1px solid red');
					}
					
					cnt_txtbox = 0;
					msg = "Please supply necessary information";
					//alert("Please supply necessary information");
					//break;
				}
				
				else{
					//cnt_txtbox += "\n subject_code #" + i + " : " + $('#subject_code' + i).val();
					cnt_txtbox = counter - 1;
					
					var time1 = convertTime12to24(subject_starttime);
					var time2 = convertTime12to24(subject_endtime);
					
					if (toMinutes(time1) < toMinutes(time2)) {
					//if (time1 < time2){
						for (var z = 0; z < 5; z++) {
							//arr[y][z] = $('#subject_code' + i).val();
							
							if(z==0){
								var two_col = $('#subject_code'+ i).val();
							}
							else if(z==1 ){
								var two_col = $('#subject_desc'+ i).val();
							}
							else if(z==2){
								var two_col = $('#section'+ i).val();
							}
							else if(z==3){
								var two_col = $('#subject_starttime'+ i).val();
							}
							else if(z==4){
								var two_col = $('#subject_endtime'+ i).val();
							}
							
							arr[x][z] = two_col;
							
						}
					}
					else{
						cnt_txtbox = 0;
						msg = "End time must be after the Start time";
						break;
					}

				}
				
			}
			
			if (cnt_txtbox != 0){
				
				if(confirm("Are you sure you want to submit this schedule?")){
					$.ajax({
					   type: "POST",
					   url: "components/insert-prelim.php",
					   data: { arr: arr },
					   success:function(result){
							alert(result);
							$(".form-control").css('pointer-events', 'none');
							$(".form-control").css('background-color', '#bdb9b9');
							$(".form-control").css('border', 'none');
							
							$("#addButton").css('display', 'none');
							$("#removeButton").css('display', 'none');
							$("#getButtonValue").css('display', 'none');
							$("#nextButton").css('display', 'block');
					   }
					});
				}
				else{
					return false;
				}
				
			}
			else{
				alert(msg);
			}
			
			
		});
		
		$("#removeButton").click(function () {
			if(counter==1){
				alert("No more textbox to remove");
				$(".info-panel").css('display', 'none');
				return false;
			}   
			
			counter--;
			$("#TextBoxDiv" + counter).remove();	
		});
		
		$("#nextButton").click(function () {
			window.location.replace("midterm-view.php");
		});
	
	});
</script>