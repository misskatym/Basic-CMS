<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Untitled 1</title>
</head>

<body>
<?php
include 'connect.php';

$sql = "UPDATE news SET headline='" . $_POST['headline'] . "', article='" . $_POST['article'] . "'  WHERE newsid=" . $_POST['newsid'];

$result = $conn->query($sql);

$conn->close();
?>
<p><a href="tours.php">Back</a></p>


</body>

</html>
