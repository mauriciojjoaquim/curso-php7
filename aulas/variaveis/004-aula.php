<?php

//Variaveis super  globais

//$nome  = (int)$_GET["a"];

//var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"];
$nome = $_SERVER["SCRIPT_NAME"];

echo $ip." ".$nome;

?>