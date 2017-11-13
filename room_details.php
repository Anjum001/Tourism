<?php include('includes/header.php'); ?>

<?php 
	if( isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true) {

	} else {
		header("Location: index.php");
		exit();
	}
?>

<div class="main-content">
	<h1>Room details</h1>
	<?php
	$hotel_id = $_GET['hotel_id'];
	$sql = "SELECT * FROM room_details WHERE hotel_id = {$hotel_id}";
	$result_set = mysql_query($sql) or die(mysql_error());
	// print_r($result_set);
	// echo mysql_num_rows($result_set);
	?>
	

	<table>
		<tr>
			<th>Room type</th>
			<th>rent</th>
		</tr>
	<?php
	while($row = mysql_fetch_array($result_set)) {
		// print_r($row);
		?>
		
			<tr>
				<td><?php echo $row['room_type']; ?></td>
				<td><?php echo $row['rent']; ?></td>
			</tr>
		<?php
	}
	?>
	</table>
</div>

<?php include('includes/footer.php'); ?>