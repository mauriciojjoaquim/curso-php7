<?php

/*
O tamanho do papel A4 pode ser apresentado em diferentes métricas, 
como milímetros 
(210mm X 297mm); ou em pixels (2480px X 3508px).
*/
$LibreBodoni_Regular = __DIR__.DIRECTORY_SEPARATOR."incs".DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Libre_Bodoni".DIRECTORY_SEPARATOR."static".DIRECTORY_SEPARATOR."LibreBodoni-Regular.ttf";

$image = imagecreatefromjpeg("incs/imagens/document/contract.jpg");


$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

//Titulo da pagina
imagettftext($image, 50, 0, 450, 150, $titleColor, $LibreBodoni_Regular, utf8_decode("CSE-ELETRIC Contrato de Seviços de Manutenção Elétrico"));
imagettftext($image, 50, 0, 450, 310, $titleColor, $LibreBodoni_Regular, utf8_decode("contato e whats (11) 984716-838"));
imagettftext($image, 50, 0, 450, 390, $titleColor, $LibreBodoni_Regular, utf8_decode("email: mauriciojjoaquim@cse-eletric.com.br"));


////Corpo da pagina dados do cliente
imagettftext($image, 32, 0, 220, 550, $titleColor, $LibreBodoni_Regular, utf8_decode("Eu do Nome_____________________________ portador do documento cpf_________________________ "));


//data saida 
imagettftext($image, 32, 0, 620, 3000, $titleColor, $LibreBodoni_Regular,  utf8_decode("Concluído em: ". date("d/m/Y")));

//Assinatura do cliente
imagettftext($image, 32, 0, 320, 3200, $titleColor, $LibreBodoni_Regular,  utf8_decode("________________________________           ________________________________"));
imagettftext($image, 32, 0, 520, 3240, $titleColor, $LibreBodoni_Regular,  utf8_decode("Assinatura do Cliente                                       Assinatura do intalador"));

header("Content-Type:image/jpeg");

//imagejpeg($image, "incs/contract/13240-fatima-".date("Y-m-d").".jpg");

imagejpeg($image);

imagedestroy($image);
?>