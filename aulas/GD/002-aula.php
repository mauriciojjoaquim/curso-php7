<?php

/*
O tamanho do papel A4 pode ser apresentado em diferentes métricas, 
como milímetros 
(210mm X 297mm); ou em pixels (2480px X 3508px).
*/

$image = imagecreatefromjpeg("incs/imagens/document/certificado.jpg");

$titlecolor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);


imagestring($image, 5, 450, 150, "CERTIFICADO",$titlecolor);
imagestring($image, 5, 440, 350, utf8_decode("Mauricio José Joaquim"),$titlecolor);
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ". date("d/m/Y")),$titlecolor);

header("Content-Type:image/jpeg");

imagejpeg($image, "incs/contract/certificado-".date("Y-m-d").".jpg");
imagejpeg($image);

imagedestroy($image);
?>