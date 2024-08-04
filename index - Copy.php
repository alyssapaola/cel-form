<?php  
	session_start();
	 session_destroy();
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
		<link href="assets/img/favicon.png" rel="icon">
		<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
	
		<!-- Vendor CSS Files -->
		<link href="assets/vendor/aos/aos.css" rel="stylesheet">
		<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
		<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
		<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
		
		<!-- Template Main CSS File -->
		<link href="assets/css/style.css" rel="stylesheet">

		<!-- =======================================================
		* Template Name: Rapid - v4.9.0
		* Template URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
		* Author: BootstrapMade.com
		* License: https://bootstrapmade.com/license/
		======================================================== -->
	</head>
	
	<style>
		#about{
			padding-top: 10px;	
		}
		.about-content{
			margin: auto;
			width: 80%;
		}
		.mb-3 {
		  display: table;
		  margin: 0 auto;
		  width: 50%;
		}
		.info {
			font-size: .8em;
			color: #ff0000;
			padding-left: 5px;
		}
		.col-sm-6{
			width: 80%;
		}
		.justify-content-left {
			margin-left: 50px;
		}
	</style>
	
	<body>
		<!-- ======= Header ======= -->
		<header id="header" class="fixed-top d-flex align-items-center header-transparent">
		
			<div class="container d-flex align-items-center">
				<h1 class="logo me-auto"><a href="index.php">Center for Technology-Enabled Education</a></h1>
				
				<nav id="navbar" class="navbar order-last order-lg-0">
					<ul>
						<li><a class="nav-link scrollto active" href="#hero">Home</a></li>
						<li><a class="nav-link scrollto" href="#about">Apply</a></li>
					</ul>
					<i class="bi bi-list mobile-nav-toggle"></i>
				</nav>
			</div>
		</header><!-- End Header -->
	
		<!-- ======= Hero Section ======= -->
		<section id="hero" class="clearfix">
			<div class="container d-flex h-100">
				<div class="row justify-content-left align-self-center" data-aos="fade-up">
					<div class="col-lg-6 intro-info order-lg-first order-last" data-aos="zoom-in" data-aos-delay="100">
						<h2>Online Registration for Asynchronous Classes</h2>
					
						<div>
							<a href="#about" class="btn-get-started scrollto">Get Started</a>
						</div>
					</div>
					
				</div>
			</div>
		</section><!-- End Hero -->
	
		<main id="main">
			<!-- ======= About Section ======= -->
			<section id="about" class="about">
		
				<div class="container" data-aos="fade-up">
				
					<div class="about-content" data-aos="fade-left" data-aos-delay="100"  style="text-align:center;" >
					
						<h2>Application Form </h2>
						<h5>Asynchronous Classes First Semester AY 2022-2023</h5>
						
					</div>
					
					<div class="about-content" data-aos="fade-left" data-aos-delay="100" style="text-align:justify; padding-top:10px;">
							
						<form method="post" class="php-email-form"  role="form"  id="search_form">	
							
							<div class="mb-3">
								<label for="faculty_id" class="form-label">Enter Faculty Number:</label>
								<input type="text" class="form-control" placeholder="eg: 2022-0074F" name="faculty_id" id="faculty_id" >
								<div id="faculty_id-info" class="info"></div>
							</div>
							
							<div class="mb-3" style="text-align:center; padding-top:10px;">
								<input type="submit" name="search" value="Search"></input>
							</div>
							
						</form>
						
						<form method="post" class="php-email-form"  role="form"  id="search_form" >
						
							<div class="mb-3" id="hidden-info" style="display: none;">
								<table class="table table-bordered ">
									<tr>  
										<td colspan="2">Record matched!</td>  
									</tr>
									<tr align="center">  
										<td><b>Faculty Number </b></td>  
										<td><b>Faculty Name </b></td>
									</tr>
									<tr align="center">   
										<td id="hidden-info-td1"></td>  
										<td id="hidden-info-td2"></td>  
									</tr>
									<tr align="center">   
										<td colspan="2"><input type="button" id="nextButton" value="Click to Proceed"></input></td>
									</tr>
								</table>
								
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
		<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
		<script src="assets/vendor/aos/aos.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
		<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
		<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		
		<!-- Template Main JS File -->
		<script src="assets/js/main.js"></script>
	
	</body>
</html>

<script type="text/javascript" language="javascript" >
	$(document).ready(function(){
		
		$('#search_form').on("submit", function(event){  
			event.preventDefault();  
			
			$(".info").html("");
			$(".form-control").css('border', '#e0dfdf 1px solid');
			$("#hidden-info").css('display', 'none');
			
			var faculty_id = $("#faculty_id").val();
	
			if (faculty_id == "") {
				$("#faculty_id-info").html("Please supply necessary information.");
				$("#faculty_id").css('border', '#ff0000 1px solid');
			}  
			else{  
				
				if(useRegex(faculty_id)==false){
					$("#faculty_id-info").html("Please input the correct format");
					$("#faculty_id").css('border', '#ff0000 1px solid');
					return false;
				}else{
			
					$.ajax({
						url : "check.php",
						type : "POST",
						cache:false,
						data : {faculty_id:faculty_id},
						success:function(result){
							if (result == "") {
								$("#faculty_id-info").html("No record found");
								$("#faculty_id").css('border', '#ff0000 1px solid');  
							}
							else{
								$("#hidden-info").css('display', 'block');
								$("#hidden-info-td1").html(faculty_id);
								$("#hidden-info-td2").html(result);
								//window.location.href= "application/index.php";
							}
						}
					});
				}
			}	   
		});
		
		function useRegex(faculty_id) {
			//let regex = /\d{4}[\-]\d{4}/i;
			let regex = /\d{4}[\-]\d{4}[A-Z]{1,10}$/g;
			// return regex.test(input);
		
			if(!regex.test(faculty_id)) {
				return false;
			}else{
				return true;
			}
		}
		
		$("#nextButton").click(function () {
			window.location.replace("application/prelim-view.php");
		});
		
	});
</script>