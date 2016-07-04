<?php
session_start();
Header("Content-type: image/jpeg");
Header("Content-type: image/png");
$img = imagecreatefromjpeg('http://mihailsokoloff.esy.es/database/unnamed.jpg');
$color = imagecolorexact($img, 120, 70, 180);
$text=rand(100000,999999);
$_SESSION["cap"]=$text;
imagestring ($img, 10, 55, 20, $text, $color);
imagejpeg($img); 
imagedestroy($img);
?> 