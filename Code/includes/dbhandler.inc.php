<?php
$servername = "localhost:3308";
//insert username
$username_db = "root";
//insert password
$password_db = "";
//insert database name
$dbname = "testdb1";

$conn = mysqli_connect($servername, $username_db, $password_db, $dbname);
if(!$conn) {
	$conn = mysqli_connect($servername, $username_db, $password_db);
	$sql = "CREATE DATABASE $dbname";
	if (!mysqli_query($conn, $sql)) {
    die();
	}
}
