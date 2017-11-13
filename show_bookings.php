<?php include('includes/header.php');	 ?>

<?php 
	if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true) {

	} else {
		header("Location: index.php");
		exit();
	}

	if($_SESSION['is_admin'] == true) {

	} else {
		header("Location: index.php");
		exit();
	}
?>

<div class="main-content">
	<?php
	$sql = "SELECT * FROM bookings";
	$result_set = mysql_query($sql) or die(mysql_error());
	?>
	<table border="1">
		<tr>
			<th>Serial no</th>
			<th>Hotel name</th>
			<th>Guest name</th>
			<th>Guest contact no</th>
			<th>Guest email</th>
			<th>Room type</th>
			<th>Total rooms</th>
			<th>Total days</th>
			<th>Booking Date</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>
	<?php
	$i = 1;
	while($row = mysql_fetch_array($result_set)) {
		?>
			<tr>
				<td><?php echo $row['id'];; ?></td>
				<td><?php echo $row['hotel_name']; ?></td>
				<td><?php echo $row['guest_name']; ?></td>
				<td><?php echo $row['guest_contact_no']; ?></td>
				<td><?php echo $row['guest_email']; ?></td>
				<td><?php echo $row['room_type']; ?></td>
				<td><?php echo $row['total_rooms']; ?></td>
				<td><?php echo $row['total_days']; ?></td>
				<td><?php echo $row['booking_date']; ?></td>
				<td>
					<a href="generate_file.php?type=ok&booking_id=<?php echo $row['id']; ?>">OK</a>
				</td>	
				<td>
					<a href="generate_file.php?type=notok&booking_id=<?php echo $row['id']; ?>">NOT OK</a>
				</td>
				<td>
					<?php if (file_exists("files/{$row['id']}" . '.html')) {
						?>
							<a href="files/<?php echo $row['id'] . '.html'; ?>">
								<?php echo $row['id'] . '.html'; ?>
							</a>
						<?php
					}

					?>
					
				</td>
			</tr>
		<?php
		$i++;
	}

	?>
	</table>
</div>

<?php include('includes/footer.php'); ?>