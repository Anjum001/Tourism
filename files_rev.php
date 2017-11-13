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
	$reservation_id = $_GET['reservation_id'];

	$sql = "SELECT * FROM reservation where id = {$reservation_id}";
	$result_set = mysql_query($sql) or die(mysql_error());

	while($row = mysql_fetch_array($result_set)) {
		    $bus_name = $row['bus_name'];
			$guest_name = $row['guest_name'];
			$guest_contact_no = $row['guest_contact_no'];
			$guest_email = $row['guest_email'];
			$seat_type = $row['seat_type'];
			$total_seat = $row['total_seat'];
			
			$location_from = $row['location_from']; 
            $location_to = $row['location_to']; 
		    $arrival_date = $row['arrival_date'];       
		    $arrival_time = $row['arrival_time'];
		    $request_date = $row['request_date'];

		
	}


	$fp = fopen("files2/{$reservation_id}.html", "w");

	if ($type == 'ok') {
		$file_data = "<p><img src='../img/webban.jpg' alt='Main Banner' width='900' height='229'></p>
		   <h2>From:Tourism Guide.</h2>
		<h2>Dear $file_data : $guest_name your Bus reservation request. - SUCCESSFUL.</h2>";


	} else {
		$file_data = "<p><img src='../img/webban.jpg' alt='Main Banner' width='900' height='229'></p>
		   <h2>From:Tourism Guide.</h2>
		<h2>Dear $file_data : $guest_name your Bus reservation request. - FAILED.</h2>";
	
	}
            

	
	$file_data .= "<p>====================================================</p>";
	$file_data .= "<p>bus name: " . $bus_name . "</p>";
	
	$file_data .= "<p>Guest contact no: " . $guest_contact_no . "</p>";
	$file_data .= "<p>Guest email: " . $guest_email . "</p>";
	$file_data .= "<p>seat type: " . $seat_type . "</p>";
	$file_data .= "<p>Total seat: " . $total_seat . "</p>";
	$file_data .= "<p>location from: " . $location_from . "</p>";
	$file_data .= "<p>location to: " . $location_to . "</p>";
	$file_data .= "<p>arrival date: " . $arrival_date . "</p>";
	$file_data .= "<p>arrival time: " . $arrival_time . "</p>";
	$file_data .= "<p>Thank you for your request.</p>";
	fwrite($fp, $file_data);
	fclose($fp);

	header("location: show_reservation.php");
	exit();

?>