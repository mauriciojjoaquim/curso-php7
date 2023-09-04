<?php

/*
O tamanho do papel A4 pode ser apresentado em diferentes métricas, 
como milímetros 
(210mm X 297mm); ou em pixels (2480px X 3508px).
*/
$fontsBevan = __DIR__.DIRECTORY_SEPARATOR."incs".DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf";
$fontsPlayball = __DIR__.DIRECTORY_SEPARATOR."incs".DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf";
$image = imagecreatefromjpeg("incs/imagens/document/certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);


imagettftext($image, 32, 0, 320, 250, $titleColor, $fontsBevan, "CERTIFICADO");
imagettftext($image, 32, 0, 375, 350, $titleColor, $fontsPlayball, utf8_decode("Mauricio José Joaquim"));
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ". date("d/m/Y")),$titleColor);

header("Content-Type: image/jpeg");

//imagejpeg($image, __DIR__.DIRECTORY_SEPARATOR."incs/contract/certificado-mjj-".date("Y-m-d").".jpg");
imagejpeg($image);

imagedestroy($image);
?>