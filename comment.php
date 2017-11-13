<?php include('includes/header.php'); ?>
<?php 
	if(isset($_SESSION['is_logged_in']) &&  $_SESSION['is_logged_in'] == true) {

	} else {
		header("Location: index.php");
		exit();
	}
?>

<div class="main-content">
	<p>Please tell us ur opinion about our website.
	 we are always trying our best to give you better facility.</p>
	 <p>Do you like our website or not?</p>
	 <span class="likebtn-wrapper"></span>
<script type="text/javascript" src="//w.likebtn.com/js/w/widget.js" async="async"></script>

	
<?php
	// i will start processing if there's any data in $_POST array
	if (

              !empty($_POST['comment_date']) && !empty($_POST['name'])


		) {
		    $comment_date = mysql_real_escape_string($_POST['comment_date']); 
			$name = mysql_real_escape_string($_POST['name']);
			$comments = mysql_real_escape_string($_POST['comments']);
			 
			$sql = "INSERT INTO comments ( comment_date,name, comments ) VALUES ('{$comment_date}','{$name}', '{$comments}'  )";

			$query = mysql_query($sql) or die(mysql_error());

			// test
			$inserted = mysql_affected_rows();
			// if successful
			

	} 
?>



<title>Comment Box</title>
<div class="comment_input">
<form action="comment.php" method="post">
		<table>
			<tr>
				<td>Comment Date </td>
				<td>
					<input type="date" name="comment_date" placeholder="comment date...">
				</td>
			</tr>
			<tr>
				<td>name </td>
				<td>
					<input type="text" name="name" placeholder="Name...">
				</td>
			</tr>
			<tr>
				<td>comment</td>
				<td>
					<textarea name="comments" placeholder="Leave Comments Here..." style="width:635px; height:100px;"></textarea></br></br>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="submit" >
				</td>
			</tr>
		</table>
	</form>
</div>

<?php


$sql = "SELECT * FROM comments";
	$result_set = mysql_query($sql) or die(mysql_error());



while($row = mysql_fetch_array($result_set)){
echo "<div class='comments_content'>";
echo "<h1>" . $row['comment_date'] . "</h1>";
echo "<h2>" . $row['name'] . "</h2>";
echo "<h2>" . $row['comments'] . "</h2>";
echo "<hr>";
echo "<h2>admin replies:</h2>";

echo "<h2>". $row['reply'] . "</h2>";

echo "<h3><a href='delete.php?id=" . $row['id'] . "'> delete</a> &nbsp &nbsp<a href='reply.php?id=" . $row['id'] . "'> reply</a></h3>";

echo "</div>";
}
?>
</div>
<?php include('includes/footer.php'); ?>



	