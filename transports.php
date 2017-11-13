<?php include('includes/header.php'); ?>
<?php 
	if( isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true) {

	} else {
		header("Location: index.php");
		exit();
	}
?>

<div class="main-content">
	
	<p>
		Please go to <a href="reservation.php"> Reservation</a> to reserve your ticket.
	</p>
	
	<?php
	$sql = "SELECT * FROM transports";
	$result_set = mysql_query($sql) or die(mysql_error());
	echo '<table border="1">';
	echo '<tr>';
		echo '<th>serial</th>';
		echo '<th>bus name</th>';
		echo '<th>from</th>';
		echo '<th>to</th>';
		echo '<th>Departure</th>';
		echo '<th>counter location</th>';
	echo '</tr>';
	$i = 1;
	while($row = mysql_fetch_array($result_set)) {
		echo '<tr>';
		echo "<td>{$i}</td>";
		echo "<td>{$row['bus_name']}</td>";
		echo "<td>{$row['from']}</td>";
		echo "<td>{$row['to']}</td>";
		echo "<td>{$row['start_time']}</td>";
		echo "<td>{$row['counter_location']}</td>";
		echo '</tr>';
		$i++;
	}

	echo '</table>';
	?>
</div>
<?php include('includes/footer.php'); ?>