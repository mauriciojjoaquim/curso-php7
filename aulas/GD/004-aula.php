<?php

header("Content-Type: image/jpeg");

$file = "./incs/imagens/wallpaper.jpg";

$new_whith = 256;
$new_heiht = 256;

list($old_whith, $old_heith) = getimagesize($file);

$new_image = imagecreatetruecolor($new_whith, $new_heiht);

$old_image = imagecreatefromjpeg($file);

imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_whith, $new_heiht, $old_whith, $old_heith); 

imagejpeg($new_image);

imagedestroy($old_image);
imagedestroy($new_image);
?>