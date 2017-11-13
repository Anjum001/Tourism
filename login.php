<?php include('includes/header.php'); ?>
<div class="main-content">
	<h1>Login</h1>
	<?php  
	if (
			!empty($_POST['username']) && !empty($_POST['password']) 
		) {
		// user has provided both username and password
		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string($_POST['password']);
		
		// here our target is to check user with saved username and password
		$sql = "SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}' ";
		$result_set = mysql_query($sql) or die(mysql_error());

		// if there's a user with given username and password we will get mysql_num_rows() > 0

		if (mysql_num_rows($result_set) > 0) {

			$row = mysql_fetch_array($result_set);

			echo 'User exists.';
			// here we will set this user as logged in.
			$_SESSION['is_logged_in'] = true;

			// we also have to decide admin or not?
			if ($row['is_admin'] == 1) {
				$_SESSION['is_admin'] = true;				
			}

			// we don't need to stay here, anymore
			// redirect user to home page
			header("Location: index.php");
			exit();
		} else {
			echo '<p>Sorry, wrong username or password given.</p>';
		}
	} else {
		echo '<p>Please provide both username and password.</p>';
	}
	?>
	<form action="login.php" method="post">
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
				<td></td>
				<td>
					<input type="submit" name="submit" value="login">
				</td>
			</tr>
		</table>
	</form>
</div>
<?php include('includes/footer.php'); ?>