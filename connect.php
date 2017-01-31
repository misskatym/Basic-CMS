<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Untitled 1</title>
</head>

<body>

<?php

$servername = "localhost";
$username = "admin";
$password = "1234";
$dbname = "bandsite";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
	echo "";
	}

?>

</body>

</html>
