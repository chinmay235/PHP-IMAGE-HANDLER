<?php
$imgname = "image1.jpg";
list($width, $height, $type, $attr) = getimagesize($imgname);
$im = imagecreatefromjpeg ($imgname);
$imSize = imagecreatetruecolor($width, $height);

// Make the background transparent
imagecopymerge($im, $imSize, 0, 0, 0, 0, $width, $height, 75);


//imagefill($im, 0, 0, $red);
// if you want to save please write this two link
//$imgname = "result.png";
//imagepng($im, $imgname);

// Otherwise view in content type format
header('Content-type: image/png');
imagepng($im);

imagedestroy($im);
?>
