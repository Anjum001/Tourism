<?php include('includes/header.php'); ?>

<?php 
	if( isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true) {
  
	} else {
		header("Location: index.php");
		exit();
	}
?>
<div class="main-content">
	
	<?php 
	$city_id = $_GET['city_id'];
	$sql = "SELECT * FROM hotels WHERE city_id = {$city_id}";
	$result_set = mysql_query($sql) or die(mysql_error());

	// echo mysql_num_rows($result_set);
	?>
	<?php
	while($row = mysql_fetch_array($result_set)) {
		?>
		<div class="location">
				<div class="name">
					<h2>
						<?php echo $row['name']; ?>
						
					</h2>
					
					
				</div>
				<div class="description">
					<img src="hotel/<?php echo $row['featured_pic'] ?>" alt="" width="750" height="250">
					
					

					<h3>Contact Address </h3>
					<?php echo $row['contact_address']; ?>



					
				</div>

			
		
		  <h3>
			<a href="room_details.php?hotel_id=<?php echo $row['id'] ?>">See room details</a>
		
                </h3>
		</div>
		<?php
	}

	?>
</div>
	
<?php include('includes/footer.php'); ?>