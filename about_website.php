<?php include('includes/dbcon.php'); ?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>My Tourism Site</title>
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<div class="container_web">
			<div class="header">
				<img src="img/webban.jpg" alt="Main Banner" width="900" height="229">
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
						<li class="fourth"><a href="transports.php">transports</a></li>
						<li class="fifth"><a href="prospectus.php">prospectus</a></li>
						<li class="first"><a href="logout.php">Logout </a></li>
						<?php
					} ?>
					
				</ul>
			</div>
			       <div class="main-content">
			       <div class="about_website">
			       	

		                    
	

	      <p>Welcome to the 'Tourism Guide'  website for Bangladesh, with everything you need to know about our beautiful country in this website.
 From learning more about our country , special occasion incident,
 to finding out more about the numerous cultures found in our country,
 this website provides up-to-date and accurate information for the traveller interested in exploring Bangladesh.
 You will find links to specific locations, travel advice,historical and cultural background on our diverse country.
 
You've come to the right place.If you want to see the green environment of our country with river and hill and make yourself enjoy!
 
		                           </p>
		                           <h1>Tourism guide strategy</h1>
		                           <p><img src="img/bok.jpg" alt="alt text" style="float: right"> 
		                           	A core element of Tourism Guide strategy is to target a high yielding consumer segment, those who will spend more and do more on their trips to Bangladesh.  

Building on the Experience Seeker research outlined below, Tourism Guide has identified a specific target  to achieve the Tourism 2020 strategy. 
 Our website can fulfill the desire and expectation of an 'Experience seekers'.


Experience Seekers are, by definition, looking for unique, involving and personal experiences from their holidays. Using psychographic research, studies find how travellers think and feel to determine the personal factors that influence them to travel. Experience Seekers are long haul travellers who are less affected by the traditional barriers to travel of distance, time and cost. They are more informed, interested and curious about potential travel destinations.

Experience Seekers can be found among all age groups, income levels and geographic locations. 
    <img src="img/river.jpg" style="display:block; margin: 0 auto" alt="alt text">  


		                           </P>
	                              </div>
	                          </div>





			                    <div class="footer">
			                    		Email:bd.tourismguide@gmail.com
				                        <p>&copy; 2014. Tourism Guide, Bangladesh</p>
			</div>
		</div>
	</body>
</html>