<?php include('includes/dbcon.php'); ?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Tourism Guide</title>
		<link rel="stylesheet" href="css/main.css">

		<!-- jQuery library (served from Google) -->
		<script src="js/jquery-1.11.3.js"></script>
		<!-- bxSlider Javascript file -->
		<script src="js/jquery.bxslider.js"></script>
		<!-- bxSlider CSS file -->
		<link href="css/jquery.bxslider.css" rel="stylesheet" />

		<script>
		$(document).ready(function(){
		  $('.bxslider').bxSlider();
		});
		</script>
	</head>
	<body>
		<div class="container">
			<div class="header">
				<img src="img/banner2.jpg" alt="Main Banner" width="900" height="229">
				<FONT SIZE="4" FACE="courier" COLOR=blue><MARQUEE WIDTH=100% BEHAVIOR=SCROLL BGColor= #C0C0C0 LOOP=3>
					"Tourism Guide" "Tourism Guide" "Tourism Guide" "Tourism Guide"</MARQUEE></FONT>
			</div>
			<div class="navbar">
				<ul class="nav">
					<li class="first"><a href="index.php">Home</a></li>
					<li class="second"><a href="about_bangladesh.php">About Bangladesh</a></li>
					<li class="third"><a href="about_website.php">About this site</a></li>
					<?php 
						// when user is not logged in
						if (!isset($_SESSION['is_logged_in'])) {
							?>
							<li class="fifth"><a href="login.php">Login </a></li>
							<li class="fourth"><a href="signup.php">Sign up</a></li>
							<?php
						}
					?>
					<?php 
						// when user is logged in
						if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true) {
						?>
						<li class="second"><a href="booking.php">Booking</a></li>
						<li class="fourth"><a href="transports.php">Transports</a></li>
						<li class="fifth"><a href="prospectus.php">Prospectus</a></li>
						
						<li class="sixth"><a href="comment.php">comment </a></li>
						<li class="first"><a href="logout.php">Logout </a></li>

						<?php
					} ?>
					
				</ul>
			</div>