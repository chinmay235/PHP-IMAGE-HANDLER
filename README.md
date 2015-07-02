# PHP-IMAGE-HANDLER


*index.php*


Home Page  This page contains opacity. You will get background black color opacity. 

If you need so save file please use 

    $imgname = "result.png";
    imagepng($im, $imgname);

    Instead of

    header('Content-type: image/png');
    imagepng($im);
