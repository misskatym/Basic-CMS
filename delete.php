<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Band Site</title>
</head>

<body>
<div id="logo">
<a  href="index2.php"><img src="logo2.png"/></a>
</div>

<nav>
<a href="index2.php">Home</a>
<a href="about.php">About the Band</a>
<a href="news.php">News</a>
<a href="tours.php">Tours</a>
<a href="discography.php">Discography</a>
<a href="gallery.php">Gallery</a>
<a href="admin.php">Admin</a>
</nav>

<?php
include 'connect.php';

$sql = "DELETE FROM news WHERE newsid=" . $_GET['newsid'];
$result = $conn->query($sql);

$conn->close();
?>
<p><a href="tours.php">Back</a></p>


</body>

</html>
