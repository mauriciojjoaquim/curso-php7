<?php

header("Content-Type:image/png");
/*
O tamanho do papel A4 pode ser apresentado em diferentes métricas, 
como milímetros 
(210mm X 297mm); ou em pixels (2480px X 3508px).
*/
$image = imagecreate(256, 256);

$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);


imagestring($image, 5, 60, 120, "CSE-ELETRIC MEI",$red);


imagepng($image);

imagedestroy($image);
?>