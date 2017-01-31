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

<form action="update.php" method="post">
<p>newsid: <input type="hidden" name="newsid" value="<?php echo $_GET['newsid'] ?>"></p>
<p>headline: <input type="text" name="headline" value="<?php echo $_GET['headline'] ?>"></p>
<p>article: <input type="text" name="article" value="<?php echo $_GET['article'] ?>"></p>
<p><input type="submit" value="Submit"></p>
</form>

</body>

</html>
