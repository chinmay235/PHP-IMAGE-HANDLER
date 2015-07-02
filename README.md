# PHP-IMAGE-HANDLER


*index.php*

Home Page  This page contains opacity. You will get background black color opacity. 

If you need so save file please use 

    $imgname = "result.png";
    imagepng($im, $imgname);

    Instead of

    header('Content-type: image/png');
    imagepng($im);



**index2.php**

Show two images ony by one like watermark.

Define two images

    $image1 = 'img-path/image1.jpg';
    $image2 = 'img-path/image2.jpg';
    
![image1](https://cloud.githubusercontent.com/assets/1681620/8474547/78a59206-20ce-11e5-8abb-a129c377452a.jpg)
![image2](https://cloud.githubusercontent.com/assets/1681620/8474548/78c6b544-20ce-11e5-904a-ccfd379c248e.jpg)

    
    
    
Get width and height of first image.

    list($width, $height) = getimagesize($image1);
    
    
`imagecreatefromjpeg()` returns an image identifier representing the image obtained from the given filename. 

    $dest = imagecreatefromjpeg($image1);
    $src = imagecreatefromjpeg($image2);
    
Merging two images of the `image1.jpg` and `image2.jpg` images with 75% transparency

    imagecopymerge($dest, $src, 0, 0, 0, 0, $width, $height, 75);
    
 We'll be outputting a gif format

    header('Content-Type: image/gif');
    imagegif($dest);

Destroy image. `imagedestroy()` frees any memory associated with image `$dest` and `$src`. 

    imagedestroy($dest);
    imagedestroy($src);
    
    
