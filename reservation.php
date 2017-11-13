<?php include('includes/header.php'); ?>
<?php 
	if(isset($_SESSION['is_logged_in']) &&  $_SESSION['is_logged_in'] == true) {

	} else {
		header("Location: index.php");
		exit();
	}
?>


<div class="main-content">
<?php
	// i will start processing if there's any data in $_POST array
	if (
			! empty($_POST['bus_name']) && ! empty($_POST['guest_contact_no'])
		) {
			$bus_name = mysql_real_escape_string($_POST['bus_name']);
			$guest_name = mysql_real_escape_string($_POST['guest_name']);
			$guest_contact_no = mysql_real_escape_string($_POST['guest_contact_no']);
			$guest_email = mysql_real_escape_string($_POST['guest_email']);
			$seat_type = mysql_real_escape_string($_POST['seat_type']);
			$total_seat = mysql_real_escape_string($_POST['total_seat']);
			
			$location_from = mysql_real_escape_string($_POST['location_from']); 
            $location_to = mysql_real_escape_string($_POST['location_to']);
            $request_date = mysql_real_escape_string($_POST['request_date']); 
		    $arrival_date = mysql_real_escape_string($_POST['arrival_date']);       
		    $arrival_time = mysql_real_escape_string($_POST['arrival_time']);

		    // do some validation
		    if(! filter_var($guest_email, FILTER_VALIDATE_EMAIL)) {
		    	echo "<p>Please provide a valid email address. </p>";
		    	echo "<p><a href='reservation.php'>Try again</a></p>";
		    	exit;
		    }
		    

			$sql = "INSERT INTO reservation ( bus_name, guest_name, guest_contact_no, guest_email, seat_type, total_seat, location_from, location_to, arrival_date, arrival_time ,request_date) VALUES ('{$bus_name}', '{$guest_name}', '{$guest_contact_no}', '{$guest_email}', '{$seat_type}', '{$total_seat}', '{$location_from}' , '{$location_to}' , '{$arrival_date}' , '{$arrival_time}' , '{$request_date}')";

			$query = mysql_query($sql) or die(mysql_error());

			// test
			$inserted = mysql_affected_rows();
			// if successful
			if ($inserted) {
				echo '<p>Thanks. We have received your request. We will reply in your email address for confirmation your reservation.</p>';
				//send email
				
				// one email will go to person who requested

				
			}

	} else {
		echo '<p>Please provide full information.</p>';
	}
?>
	<h1>reservation</h1>
	<p>
		<?php
			if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == true) {
				echo "<a href='show_reservation.php'>show reservation list</a>";

			} 
		?>
		
	</p>
	<form action="reservation.php" method="post">
		<table>
			<tr>
				<td>bus name </td>
				<td>
					<input type="text" name="bus_name">
				</td>
			</tr>
			<tr>
				<td>guest name</td>
				<td>
					<input type="text" name="guest_name">
				</td>
			</tr>
			<tr>
				<td>guest contact no</td>
				<td>
					<input type="text" name="guest_contact_no">
				</td>
			</tr>
			<tr>
				<td>guest email</td>
				<td>
					<input type="text" name="guest_email">
				</td>
			</tr>
			<tr>
				<td>seat type</td>
				<td>
					<input type="text" name="seat_type">
				</td>
			</tr>
			<tr>
				<td>Total seat</td>
				<td>
					<input type="text" name="total_seat">
				</td>
			</tr>
			<tr>
				<td>Location From</td>
				<td>
					<input type="text" name="location_from">
				</td>
			</tr>
			<tr>
				<td>Location To</td>
				<td>
					<input type="text" name="location_to">
				</td>
			</tr>
			<tr>
				<td>Request Date</td>
				<td>
					<input type="date" name="request_date">
				</td>
			</tr>
			<tr>
				<td>Arrival_date</td>
				<td>
					<input type="date" name="arrival_date">
				</td>
			</tr>
			<tr>
				<td>Arrival_time</td>
				<td>
					<input type="time" name="arrival_time">
				</td>
			</tr>
			
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="submit">
				</td>
			</tr>
		</table>
	</form>
</div>

<?php include('includes/footer.php'); ?>