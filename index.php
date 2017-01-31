<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Band Site</title>
</head>

<body>
<div id="logo">
<a  href="index.php"><img src="logo2.png"/></a>
</div>

<nav>
<a href="index.php">Home</a>
<a href="about.php">About the Band</a>
<a href="news.php">News</a>
<a href="tours.php">Tours</a>
<a href="discography.php">Discography</a>
<a href="gallery.php">Gallery</a>
<a href="admin.php">Admin</a>
</nav>

<?php
include 'connect.php';
?>

<div id="main">
	
	<?php
		echo "<h1>Welcome</h1>";
	?>

</div>

</body>

</html>
