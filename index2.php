<?php
// Create image instances
$image1 = 'image1.jpg';
$image2 = 'image2.jpg';

list($width, $height, $type, $attr) = getimagesize($image1);


$dest = imagecreatefromjpeg($image1);
$src = imagecreatefromjpeg($image2);

// Copy and merge
imagecopymerge($dest, $src, 0, 0, 0, 0, $width, $height, 75);

// Output and free from memory
header('Content-Type: image/gif');
imagegif($dest);

imagedestroy($dest);
imagedestroy($src);
?>
