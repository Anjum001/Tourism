<?php include('includes/header.php'); ?>

<div class="main-content">
	<h1>Sign up</h1>
	<?php
		// i will start processing if there's any data in $_POST array
		if (
				!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email'] )
			) {
			// here our target is to save a user
			$username = mysql_real_escape_string($_POST['username']) ;
			$password = mysql_real_escape_string($_POST['password']) ;
			$email = mysql_real_escape_string($_POST['email']) ;

			// for characater data type we need to enclose our data within quotation.
			$sql = "INSERT INTO users (username, password,email) VALUES ('{$username}', '{$password}' ,'{$email}')";
			$query = mysql_query($sql) or die(mysql_error());
			$affected_rows = mysql_affected_rows();
			if ($affected_rows > 0) {
				echo '<p>New user has been created.please go to login page. 
				By login you can see our website properly.<p>';
			}

		} else {
			echo '<p>Please provide all data.</p>';
		}
	?>
	<form action="signup.php" method="post">
		<table>
			<tr>
				<td>Username</td>
				<td>
					<input type="text" name="username">
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
					<input type="password" name="password">
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>
					<input type="text" name="email">
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>
					<input type="submit" name="submit"  value="Submit">
				</td>
			</tr>

		</table>
	</form>
</div>
<?php include('includes/footer.php'); ?>