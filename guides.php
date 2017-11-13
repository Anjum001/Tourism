<?php include('includes/header.php'); ?>
<?php 
	if( isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true) {

	} else {
		header("Location: index.php");
		exit();
	}
?>

<div class="main-content">
	<h1>Guide list</h1>
	<?php  
	$city_id = $_GET['city_id'];
	$sql = "SELECT * FROM guides WHERE city_id = {$city_id}";
	$result_set = mysql_query($sql) or die(mysql_error());
	?>
	<table class="guides_table">
		<tr>
			<th>Guide picture</th>
			<th>name</th>
			<th>contact no</th>
			<th>Email</th>
			<th>Details</th>

		</tr>
	<?php
	while($row = mysql_fetch_array($result_set)) {
		?>
		<tr>
			<td><img src="img/<?php echo $row['featured_pic'] ?>" alt="" width="150" height="150"></td>
				
			
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['contact_no']; ?></td>
			<td><?php echo $row['Email']; ?></td>
			<td><?php echo $row['details']; ?></td>
		</tr>
		<?php
	}
	?>
	</table>
</div>
<?php include('includes/footer.php'); ?>