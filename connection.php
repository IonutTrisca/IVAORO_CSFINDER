<?php
/* This file is used to connect to the database */

DEFINE ('DB_USER', 'root'); //database username
DEFINE ('DB_PASS', ''); //user password
DEFINE ('DB_HOST', 'localhost'); //database host
DEFINE ('DB_NAME', 'local testing'); //database name

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME)
OR die('Could not connect to MySQL ' . mysqli_connect_error());
?>
