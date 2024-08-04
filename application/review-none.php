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
				<h1 class="logo me-auto"><a href="review.php">Center for Technology-Enabled Education</a></h1>
				
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
						
						<div class="mb-3" style="">
							<h4>Confirmation of Asynchronous Classes </h4>
							<p style="margin-top:10px; font-size:10pt;">
								Hi, <b><?php echo $faculty_name; ?></b>. Nothing to view here. 
								<span class="info-flip"><a href="prelim-view.php">Go Back to Main Form</a></span>
							</p>
						</div>
							
						
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