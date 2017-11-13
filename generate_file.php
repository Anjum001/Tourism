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

<?php  
	$type=$_GET['type'];
	$booking_id = $_GET['booking_id'];

	$sql = "SELECT * FROM bookings where id = {$booking_id}";
	$result_set = mysql_query($sql) or die(mysql_error());

	while($row = mysql_fetch_array($result_set)) {
		$hotel_name =  $row['hotel_name'];
		$guest_name =  $row['guest_name'];
		$guest_contact_no =  $row['guest_contact_no'];
		$guest_email =  $row['guest_email'];
		$room_type =  $row['room_type'];
		$total_rooms =  $row['total_rooms'];
		$total_days =  $row['total_days'];
		$booking_date =  $row['booking_date'];
	}


	 $fp = fopen("files/{$booking_id}.html", "w");

	if ($type == 'ok') {
		$file_data = "<p><img src='../img/webban.jpg' alt='Main Banner' width='900' height='229'></p>
		   <h2>From:Tourism Guide.</h2>
		<h2>Dear $file_data : $guest_name your hotel booking request. - SUCCESSFUL.</h2>";

	} else {
		$file_data = "<p><img src='../img/webban.jpg' alt='Main Banner' width='900' height='229'></p>
		   <h2>From:Tourism Guide.</h2>
		<h2>Dear $file_data : $guest_name your hotel booking request. - FAILED. You can try to another hotel booking request.</h2>";
	}

	
	$file_data .= "<p>====================================================</p>";
	$file_data .= "<p>Hotel name: " . $hotel_name . "</p>";
	
	$file_data .= "<p>Guest contact no: " . $guest_contact_no . "</p>";
	$file_data .= "<p>Guest email: " . $guest_email . "</p>";
	$file_data .= "<p>Room type: " . $room_type . "</p>";
	$file_data .= "<p>Total rooms: " . $total_rooms . "</p>";
	$file_data .= "<p>Total days: " . $total_days . "</p>";
	$file_data .= "<p>Thank you for your request.</p>";
	fwrite($fp, $file_data);
	fclose($fp);

	header("location: show_bookings.php");
	exit();


?>