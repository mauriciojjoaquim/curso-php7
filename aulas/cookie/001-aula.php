<?php 

$data = array(
    "empresa"=>"CSE-Eletric MEI",
    "id"=>"102457"

);

setcookie("NOME_DO_COOKIE", json_encode($data), time() +  3600);

echo "OK";


?>