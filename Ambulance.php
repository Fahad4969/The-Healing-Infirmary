<?php include('include/conn.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<!-- Responsive Meta-->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!-- Website SEO -->
	<meta name="keyword" content="HIS, Online Hospital Management System" />
	<meta name="description" content="Online Hospital Management System" />
	<!-- Author -->
	<meta name="author" content="Ahnaf Sayed" />
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" href="assets/img/logo/mlogo.png" />
	<meta name="robots" content="noindex">
	<!-- Page Title -->
	<title>Ambulance | Healing Infirmary</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<!-- OWl-Carousel CSS -->
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
	<link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
	<!-- Lightbox CSS -->
	<link rel="stylesheet" href="assets/css/lightbox.min.css" />
	<!-- Animate CSS -->
	<link rel="stylesheet" href="assets/css/animate.min.css" />
	<!-- Fontawesome CSS-->
	<link rel="stylesheet" href="assets/font/css/font-awesome.min.css" />
	<link rel="stylesheet" href="assets/font/css/font-awesome.min.css" />
	<!-- Custom Style CSS -->
	<link rel="stylesheet" href="assets/css/style1.css" />
	<link rel="icon" href="assets/img/mlogo.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"rel="stylesheet"/>
</head>

<body>
	<!-- ============== Top Header Start ====================== -->
	<header id="top" class="bg-light">
		<div class="container">
			<div class="d-flex justify-content-between">
				<!-- ================= Left Top Side Start========== -->
				<div class="first">
					<ul class="d-flex flex-row bd-highlight mb-3 top_list">
						<li class="">
							<a href="#" class="text-white">
								<i class="bi bi-phone"></i> <a href="tel:01866263500">+8801866263500</a>
							</a>
						</li>
						<li class="">
							<a href="#" class="text-white">
								<i class="bi bi-envelope"></i> <a href="mailto:info@healinginfirmary.com">info@healinginfirmary.com</a>
							</a>
						</li>
						<li class="">
							<a href="#" class="text-white">
								<i class="fa fa-calendar" aria-hidden="true"></i> <span class="d_class">Sun-Mon (9am-4pm) </span>
							</a>
						</li>
					</ul>
				</div>
				<!-- ============= Left To Side End ============== -->
				<!-- ============= Right To Side Start ============== -->
				<div class="second">
					<ul class="d-flex flex-row bd-highlight mb-3 top_list">
						<li>
							<a href="login.php" class="text-primary">
								Login
							</a>
						</li> <span class="login_border">|</span>
						<li class="">
							<a href="type-selection.php" class="text-primary">
								Register
							</a>
						</li>

					</ul>
				</div>
				<!-- ============ Right Top Side End ============ -->
			</div>
		</div>
	</header>
	<!-- ============== Top Header End ====================== -->
	<!-- ============== Nav Header Start ====================== -->
	<div class="navsection custom_nv_bg_col" id="navstart">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light ">
				<a class="navbar-brand" href="#">
					<h3 class="logo me-auto"><a href="home.php">Healing Infirmary</a></h3>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="home.php">Home</a>
						</li>
                        <li class="nav-item">
							<a class="nav-link" href="#about">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#recentnews">Recent News</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contact">Contact</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="Ambulance.php">Ambulance<span class="sr-only"></span></a>
						</li>

					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- ============== Nav Header End ====================== -->
	
	<main class="app-content">
  <div class="app-title">
    <div>
      <h1>Ambulance Service</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered" id="sampleTable">
              <tr>
            <td>Contact</td>
			<td>Driver Name</td>
        </tr>
        <?php

        require_once('include/conn.php');

        foreach ($dbh->query('SELECT * FROM ambulance') as $row) {
            echo "
                <tr>
                    <td>" . $row["Contact_Number"] . "</td>
					<td>" . $row["Driver_Name"] . "</td>
                </tr>
            ";
        }

        ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  </main>
	
	
	
	<!-- ============== Footer Section Start    =============-->
	<footer class="footer">
		<div class="container">

			<div class="footer_bottom">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-light pt-3 pb-3 copy">
						&copy; Copyright 2022<span id="date"></span>. All Rights Reserved
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-center text-white pt-3 pb-3">
						Design by <a href="home.html">Healing Infirmary System</a>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 pt-3 pb-3">
						<ul class="list d-flex justify-content-center custom_list">
							<li class="c_p"><a href="#" class="custom_text_color">
									<i class="fa fa-facebook" aria-hidden="true"></i>
								</a></li>
							<li><a href="#" class="custom_text_color">
									<i class="fa fa-twitter" aria-hidden="true"></i>
								</a></li>
							<li><a href="#" class="custom_text_color">
									<i class="fa fa-google-plus" aria-hidden="true"></i>
								</a></li>
							<li><a href="#" class="custom_text_color">
									<i class="fa fa-youtube-play" aria-hidden="true"></i>
								</a></li>
							<li><a href="#" class="custom_text_color">
									<i class="fa fa-linkedin" aria-hidden="true"></i>
								</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- ============== Footer Section End    =============-->