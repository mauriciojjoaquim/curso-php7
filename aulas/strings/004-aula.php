<?php

//Strings 
$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";

$q = strpos($frase,$palavra);

$texto = substr($frase, 0, 17);
var_dump($q);
var_dump($texto);

$texto2 = substr($frase,$q + strlen($palavra),strlen($frase));

var_dump($texto2);

?>
