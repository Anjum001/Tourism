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
	$sql = "SELECT * FROM reservation";
	$result_set = mysql_query($sql) or die(mysql_error());
	?>
	<table border="1">
		<tr>
			<th>serial id</th>
			<th>Bus name</th>
			<th>Guest name</th>
			<th>Guest contact no</th>
			<th>Guest email</th>
			<th>Seat type</th>
			<th>Total seat</th>
			<th>Location from</th>
			<th>Location to</th>
			<th>Request date</th>
			<th>Arrival date</th>
			<th>Arrival time</th>
			
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			
			</tr>
	<?php
	$i = 1;
	while($row = mysql_fetch_array($result_set)) {
		?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['bus_name'];?></td> 
				<td><?php echo $row['guest_name']; ?></td>
				<td><?php echo $row['guest_contact_no']; ?></td>
				<td><?php echo $row['guest_email']; ?></td>
				<td><?php echo $row['seat_type']; ?></td>
				<td><?php echo $row['total_seat']; ?></td>
				<td><?php echo $row['location_from']; ?></td>
				<td><?php echo $row['location_to']; ?></td>
				<td><?php echo $row['request_date']; ?></td>
				<td><?php echo $row['arrival_date']; ?></td>
				<td><?php echo $row['arrival_time']; ?></td>
				
				<td>
					<a href="files_rev.php?type=ok&reservation_id=<?php echo $row['id']; ?>">OK</a>
				</td>	
				<td>
					<a href="files_rev.php?type=notok&reservation_id=<?php echo $row['id']; ?>">NOT OK</a>
				</td>
				<td>
					<?php if (file_exists("files2/{$row['id']}" . '.html')) {
						?>
							<a href="files2/<?php echo $row['id'] . '.html'; ?>">
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