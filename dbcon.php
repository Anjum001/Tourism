<?php
session_start();
// error_reporting(0);
$connection = mysql_connect('localhost', 'root', '') or die(mysql_error());
$db_selection = mysql_select_db('tourism') or die(mysql_error());
?>