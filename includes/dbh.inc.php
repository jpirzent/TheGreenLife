<?php

$dbServername = "localhost";
$dbUsername  = "root";
$dbPassword = "20121994";
$dbName = "loginsystem";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if (!$conn)
{
	echo "Connection ERROR\n";
	exit();
}
