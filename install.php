<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbName = "loginsystem";

include_once("conn.php");

$conn = mysqli_connect($servername, $username, $password, $dbName);
if (!$conn)
{
	die("SQL connection failed: ".mysqli_connect_error());
}
cr_dtb($conn, $sql);
mysqli_select_db($conn, "rushdb");
cr_tbls($conn, $sql);
user_tables($conn);
product_tables($conn);
mysqli_close($conn);
?>