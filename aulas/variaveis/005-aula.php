<?php

//Escopo de Variaveis

$nome = "Mauricio";

function teste(){
    global $nome;
    echo $nome;
}
function teste2(){
    $nome = "João";
     echo $nome;
}

teste();
echo"<br>";
teste2();
?>