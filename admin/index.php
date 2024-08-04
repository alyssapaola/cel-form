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

		#hero .intro-info h3 {
			color: #eeeeee;
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
		
	</style>
	
	<body>
		
		<!-- ======= Header ======= -->
		<header id="header" class="fixed-top d-flex align-items-center">
		
			<div class="container d-flex align-items-center">
				<h1 class="logo me-auto"><a href="index.php">Center for Technology-Enabled Education</a></h1>
				
				<nav id="navbar" class="navbar order-last order-lg-0">
					<ul>
						<li><a class="nav-link scrollto active" href="index.php">Home</a></li>
						<li class="dropdown"><a class="nav-link scrollto" href="#">Configure</a>
							<ul>
								<li><a class="nav-link scrollto" href="configure_term.php">Add Academic Term</a></li>
								<li><a class="nav-link scrollto" href="configure_college.php">Add College</a></li>
								<li><a class="nav-link scrollto" href="configure_faculty.php">Add New Instructor</a></li>
								<li><a class="nav-link scrollto" href="configure_date.php">Add New Asynchronous Date</a></li>
							</ul>
						</li>
						<li><a class="nav-link scrollto " href="report.php">Report</a></li>
					</ul>
					<i class="bi bi-list mobile-nav-toggle"></i>
				</nav>
				
			</div>
		</header><!-- End Header -->
	
		<!-- ======= Hero Section ======= -->
		<section id="hero" class="clearfix">
			<div class="container d-flex h-100">
				<div class="row justify-content-left align-self-center">
					<div class="col-lg-6 intro-info order-lg-first order-last" >
						<h2>Online Registration for Asynchronous Classes</h2>
						<h3>Welcome, Admin</h3>
						
					</div>
					
				</div>
			</div>
		</section><!-- End Hero -->
		
		
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