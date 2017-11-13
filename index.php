<?php include('includes/header.php'); ?>
<div class="main-content">
	<?php
	$sql = "SELECT * FROM cities";
	$query = mysql_query($sql) or die(mysql_error());
	
	if (mysql_num_rows($query) > 0) {
		echo '<ul class="bxslider">';
		while($row = mysql_fetch_array($query)) {

			?>
			<li>
				<div class="city-box">
					<div>
						<img src="img/<?php echo $row['featured_pic'] ?>" alt="" width="800" height="300">
					</div>
					<p>
						<!-- query string -->
						<a href="places.php?city_id=<?php echo $row['id']; ?>">
							<?php echo ucfirst( $row['name']); ?>
						</a>
					</p>

					
				</div>
			</li>
			<?php
		}
		echo '</ul>';
	}
	?>
</div>
<?php include('includes/footer.php'); ?>
			