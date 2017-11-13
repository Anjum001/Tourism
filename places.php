<?php include('includes/header.php'); ?>
<?php 
	if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true) {

	} else {
		header("Location: index.php");
		exit();
	}
?>
<div class="main-content">
	<?php 
	$city_id = $_GET['city_id'];
	$sql = "SELECT * FROM cities WHERE id = {$city_id} LIMIT 1";
	$result_set = mysql_query($sql) or die(mysql_error());
	$selected_city = mysql_fetch_array($result_set);
	
	?>
	<div class="gudhot">
	<h1> <?php echo $selected_city['name']; ?></h1>
	<p>
		<?php
		 echo $selected_city['details'];
		?>
	</p>
	<p>
		<a href="guides.php?city_id=<?php echo $city_id; ?>">See guides of this city</a>
	</p>
	<p>
		<a href="hotels.php?city_id=<?php echo $city_id; ?>">See all hotels of this location</a>
					</p>
					<h2>Location's of <?php echo $selected_city['name']; ?></h2>
					


					</div>		


	<?php
	// at first fetch the passed value
	$city_id = $_GET['city_id'];	
	// now we have to fetch data from database for city_id = 2
	$sql = "SELECT * FROM location WHERE city_id = {$city_id}";
	$result_set = mysql_query($sql) or die(mysql_error());
	
	// loop through the result set and show all data
	while($row = mysql_fetch_array($result_set)) {
		?>
		<div class="location">
			<div class="name">
				<h2>
					<?php echo $row['name']; ?>
					
				</h2>
			</div>
			<div>
					<img src="img/<?php echo $row['featured_pic'] ?>" alt="" width="750" height="250">
				
			
				<p>
					<a href="place_details.php?place_id=<?php echo $row['id']; ?>">Show me more information</a>
				</p>
				

				
			</div>
			

		</div>
		<?php

	   }
	?>               
	                 
</div>
<?php include('includes/footer.php'); ?>