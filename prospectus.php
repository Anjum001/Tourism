<?php include('includes/dbcon.php'); ?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>My Tourism Site</title>
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<div class="container_pros">
			<div class="header">
				<img src="img/ban3.jpg" alt="Main Banner" width="900" height="229">
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
						
						<li class="first"><a href="logout.php">Logout </a></li>
						<?php
					} ?>
					
				</ul>
			</div>
			       <div class="main-content">
			       <div class="about_pros">
			       	
			       	

		                    
	

	      <p align="left">“If our lives are dominated by a search for happiness, then perhaps few activities reveal as much about the dynamics of this quest – in all its ardour and paradoxes – than our travels. 
	      	They express, however inarticulately, an understanding of what life might be about.”
	      	 – Alain De Botton, The Art of Travel
</p>
	    <p><img src="img/pros1.jpg" alt="alt text" style="float: left" width="275" height="185"></p>
	     <center>  Welcome to the 'Tourism Guide'  website for Bangladesh, with everything you need to know about our beautiful country in this website.
 From learning more about our country , special occasion incident,
 to finding out more about the numerous cultures found in our country,
 this website provides up-to-date and accurate information for the traveller interested in exploring Bangladesh.
 You will find links to specific locations, travel advice,historical and cultural background on our diverse country.
 
</center>
<p align="left">That travel and human happiness are inextricably linked may seem obvious to those who work in the industry and see first-hand the importance which people place on seeing the world, sometimes at the expense of other life comforts.
 But what is at the root of this drive to explore?
 

<h1>Travelling to find happiness</h1>

The focus may have shifted throughout this evolution of human travel but its central importance to human beings has remained, suggesting travel can fulfill many needs.

Earlier this year, G Travels released the results of a survey showing that – at least for a certain section of the population – travel ranks above all else as a source of happiness. The study revealed that 83% of the surveyed audience believe travel is very important to their happiness, 71% said it was more important than buying a house or having a baby and 61% said they would prefer having more days off work to travel than getting a pay increase.

<h1>Travel agents as spiritual gurus</h1>

So it has been established that our love of travel is enduring. Harder to pin down are the reasons behind this. The proliferation in niche travel reveals there are myriad drives behind the will to wander. Beyond base survival, human needs are complex and the wish to connect with others and understand ourselves and the world around us could all be at the root of some people’s explorations.

Even the most pedestrian package holiday expresses a wish to step outside normal life. Proclaiming your desire to lie beside the pool of a chain hotel for a week is still a statement that you believe there is more to life than work and that you wish to reclaim some time for yourself. Beyond that, niche sectors such as ethical travel are expressions of the human drive for altruism, something which has been shown to be a key factor in happiness.
  <br>
   " Travel agents would be wiser to ask<br>
    us what we hope to change about<br>
     our lives rather than simply where<br>
      we wish to go – said Alain De Botton."</br>
</p>
 
		                          
 
 <img src="img/pros3.png" style="display:block; margin: 0 auto" alt="alt text" width="900" height="200">  

	                              </div>
	                          </div>





			                    <div class="footer">
			                    		Email:bd.tourismguide@gmail.com
				                        <p>&copy; 2014. Tourism Guide, Bangladesh</p>
			</div>
		</div>
	</body>
</html>