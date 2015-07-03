<?php
// Load the stamp and the photo to apply the watermark to
$im = 'image1.jpg';

list($width, $height) = getimagesize($im);

// First we create our stamp image manually from GD
$stamp = imagecreatetruecolor($width, $height);

if($width > 400){
    $rectWidth1 = $width - (($width * 10)/100);
    $rectWidth2 = $width - ($width * 12)/100;
}else{
    $rectWidth1 = 160;
    $rectWidth2 = 150;
}

imagefilledrectangle($stamp, 0, 0, $rectWidth1, 69, 0x0000FF);
imagefilledrectangle($stamp, 9, 9, $rectWidth2, 60, 0xFFFFFF);
$im = imagecreatefromjpeg($im);
imagestring($stamp, 5, 20, 10, 'Raddyx', 0x0000FF);
imagestring($stamp, 3, 20, 40, '(c) 2010-15', 0x0000FF);

// Set the margins for the stamp and get the height/width of the stamp image
$sx = $width;
$sy = $height;

//echo $sx.'---'.$sy;exit;
// Merge the stamp onto our photo with an opacity of 50%
imagecopymerge($im, $stamp, imagesx($im) - $sx, imagesy($im) - $sy, 0, 0, imagesx($stamp), imagesy($stamp), 50);

//header('Content-Type: image/jpg');
//imagejpeg($im);

// Save the image to file and free memory
imagejpeg($im, 'result.jpg');
imagedestroy($im);

?>

<img src="result.jpg" alt="" />
