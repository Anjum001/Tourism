<?php
require("includes/dbcon.php");

if(isset($_GET['id'])){
	$id = $_GET['id'];
	//echo $id;
	//exit;
mysql_query("DELETE FROM comments WHERE id='$id'");
header("location: comment.php");
}

?>