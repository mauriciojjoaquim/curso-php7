<?php 

//$file = fopen("log.txt","w+");
$file = fopen("log.txt","a+");

fwrite($file,date("Y-m-d H:i:s")."\r\n");


fclose($file);

echo "O arquivo foi criado com sucesso na data de ".date("Y-m-d H:i:s")."!";



?>