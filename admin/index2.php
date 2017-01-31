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

<div id="menu">
<a href="index2.php">Home</a>
<a href="about.php">About the Band</a>
<a href="news.php">News</a>
<a href="tours.php">Tours</a>
<a href="discography.php">Discography</a>
<a href="gallery.php">Gallery</a>
<a href="admin.php">Admin</a>
</div>

<?php
$servername = "localhost";
$username = "admin";
$password = "1234";
$dbname = "bandsite";
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM news";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
        echo $row["newsid"]. "<br>";
        echo $row["headline"]. "<br>";
        echo $row["article"]. "<br>";
        echo "<a href='delete.php?newsid=" . $row["newsid"] . "'>Delete</a><br>";
        echo "<a href='edit.php?newsid=" . $row["newsid"] . "&headline=" . $row["headline"] . "&article=" . $row["article"] . "'>Edit</a><br>";
        echo "<hr>";
}
$conn->close();
?>



</body>

</html>
