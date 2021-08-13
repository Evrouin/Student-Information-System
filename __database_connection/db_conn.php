<?php
// redirect to the address of your ini file
// $database_connection = parse_ini_file("path/db_conn.ini");

$username = $database_connection['user'];
$password = $database_connection['pass'];
$dbname = $database_connection['name'];
$hostname = $database_connection['host'];

$connect = mysqli_connect($hostname, $username, $password, $dbname);

if (!$connect) {
	echo mysqli_connect_error();
}
