<?php

//Variaveis simples
//$nome = "Mauricio José Joaquim";
//$site ='cse-eletric.com.br';

//$ano = 1977;
//$salario = 5500.99;
//$bloqueado = false;

/////////////////////////////

//vVariaveis composto

$frutas = array("abacaxi","laranja","manga");

//echo $frutas[2];

//$nascimento = new DateTime();

//var_dump($nascimento);

/////////////////////////////

//Variavei do tipo especiais

//$arquivo = fopen("003-aula.php","r");

//var_dump($arquivo);

$nulo = NULL;//não reserva eespaço na memoria
$vasio = "";//reserva um epaço na memoria

$ip = $_SERVER["REMOTE_ADDR"];

echo $ip;

?>