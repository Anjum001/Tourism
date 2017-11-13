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
			!empty($_POST['hotel_name']) && !empty($_POST['guest_contact_no'])
		) {
			$hotel_name = mysql_real_escape_string($_POST['hotel_name']);
			$guest_name = mysql_real_escape_string($_POST['guest_name']);
			$guest_contact_no = mysql_real_escape_string($_POST['hotel_name']);
			$guest_email = mysql_real_escape_string($_POST['guest_email']);
			$room_type = mysql_real_escape_string($_POST['room_type']);
			$total_rooms = mysql_real_escape_string($_POST['hotel_name']);
			$total_days = mysql_real_escape_string($_POST['total_days']);
			$booking_date = mysql_real_escape_string($_POST['booking_date']);


			$sql = "INSERT INTO bookings (hotel_name, guest_name, guest_contact_no, guest_email, room_type, total_rooms, total_days , booking_date) VALUES ('{$hotel_name}', '{$guest_name}', '{$guest_contact_no}', '{$guest_email}', '{$room_type}', '{$total_rooms}', '{$total_days}' , '{$booking_date}')";

			$query = mysql_query($sql) or die(mysql_error());

			// test
			$inserted = mysql_affected_rows();
			// if successful
			if ($inserted) {
				echo '<p>Thanks. We have received your request. We will reply in your email address for confirmation your booking..</p>';
				
			}

	} else {
		echo '<p>Please provide all information.</p>';
	}
?>
	<h1>bookings</h1>
	<p>
		<?php
			if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == true) {
				echo "<a href='show_bookings.php'>show bookings</a>";

			} 
		?>
		
	</p>
	<form action="booking.php" method="post">
		<table>
			<tr>
				<td>Hotel </td>
				<td>
					<input type="text" name="hotel_name">
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
				<td>room type</td>
				<td>
					<input type="text" name="room_type">
				</td>
			</tr>
			<tr>
				<td>total rooms</td>
				<td>
					<input type="text" name="total_rooms">
				</td>
			</tr>
			<tr>
				<td>total days</td>
				<td>
					<input type="text" name="total_days">
				</td>
			</tr>
			<tr>
				<td>Booking Date</td>
				<td>
					<input type="Date" name="booking_date">
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