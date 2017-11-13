<?php include('includes/header.php'); ?>

<?php 
	if(isset( $_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true) {

	} else {
		header("Location: index.php");
		exit();
	}
?>

<div class="main-content">
	<div class="place_details">
		<?php 
		$place_id = $_GET['place_id'];
		$sql = "SELECT * FROM location WHERE id = {$place_id} LIMIT 1";
		$result_set = mysql_query($sql) or die(mysql_error());
		while($row = mysql_fetch_array($result_set)) {
			?>
			<div class="location">
				<div class="name">
					<h2>
						<?php echo $row['name']; ?>
						
					</h2>
					
					
				</div>
				<div class="description">
					<h3>Details</h3>
					<?php echo $row['details']; ?>

					<h3>Security information</h3>
					<?php echo $row['security_info']; ?>
					

					<h3>How to go there</h3>
					<?php echo $row['route']; ?>

					<h3>Location map</h3>
					<?php echo $row['map']; ?>
				</div>

			</div>
			<?php
		}
		?>
	</div>
</div>
<?php include('includes/footer.php'); ?>