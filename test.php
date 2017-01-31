<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Band Site</title>
</head>

<body>
<div id="logo">
<a  href="index.php"><img src="logo.png"/></a>
</div>

<div id="menu">
<a href="index.php">Home</a>
<a href="about.php">About the Band</a>
<a href="news.php">News</a>
<a href="tours.php">Tours</a>
<a href="discography.php">Discography</a>
<a href="gallery.php">Gallery</a>
<a href="admin.php">Admin</a>
</div>

    <?php
        function roundedRectangle( $image, $x1, $y1, $x2, $y2, $curveDepth, $color )
        {
          // Draw the four sides
          imageline( $image, ($x1 + $curveDepth), $y1, ($x2 - $curveDepth), $y1, $color );
          imageline( $image, ($x1 + $curveDepth), $y2, ($x2 - $curveDepth), $y2, $color );
          imageline( $image, $x1, ($y1 + $curveDepth), $x1, ($y2 - $curveDepth), $color );
          imageline( $image, $x2, ($y1 + $curveDepth), $x2, ($y2 - $curveDepth), $color );
          // Draw the four corners
          imagearc( $image, ($x1 + $curveDepth), ($y1 + $curveDepth), (2 * $curveDepth), (2 * $curveDepth), 180, 270, $color );
          imagearc( $image, ($x2 -$curveDepth), ($y1 + $curveDepth), (2 * $curveDepth), (2 * $curveDepth), 270, 360, $color );
          imagearc( $image, ($x2 - $curveDepth), ($y2 - $curveDepth), (2 * $curveDepth), (2 * $curveDepth), 0, 90, $color );
          imagearc( $image, ($x1 + $curveDepth), ($y2 - $curveDepth), (2 * $curveDepth), (2 * $curveDepth), 90, 180, $color );
        }
        // An example rectangle
        $myImage = imagecreate( 200,100 );
        $myGray = imagecolorallocate( $myImage, 204, 204, 204 );
        $myBlack = imagecolorallocate( $myImage, 0, 0, 0 );
        roundedRectangle( $myImage, 20, 10, 180, 90, 20, $myBlack );
        header( "Content-type: image/png" );
        imagepng( $myImage );
        imagedestroy( $myImage );
    ?>

</body>

</html>
