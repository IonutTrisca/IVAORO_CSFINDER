<?php
/* This file is used to connect to the database */

DEFINE ('DB_USER', 'yourUsername'); //database username
DEFINE ('DB_PASS', 'yourPassword'); //user password
DEFINE ('DB_HOST', 'yourHost'); //database host
DEFINE ('DB_NAME', 'yourDBName'); //database name


$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME)
OR die('Could not connect to MySQL ' . mysqli_connect_error());
?>
