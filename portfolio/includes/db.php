<?php
/*
 * Dana Clemmer
 * db.php
 */

//Connect to database
$database = "dclemmer_grc";
$username = "dclemmer_grcuser";
$password = "Snowcone837";
$hostname = "localhost";

$cnxn = @mysqli_connect($hostname, $username, $password, $database)
or die("There was a problem.");
