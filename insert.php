<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Untitled 1</title>
</head>

<body>
<?php
include 'connect.php';

$sql = "INSERT INTO news (headline, article) VALUES ('" . $_POST['headline']  ."', '" . $_POST['article'] . "')";
$result = $conn->query($sql);


$conn->close();
?>

<p><a href="tours.php">Back</a></p>

</body>

</html>
