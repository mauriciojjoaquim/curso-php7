<?php 

function incluirClasse($nomeClasse){
    if(file_exists($nomeClasse.".php") === true){
        require_once($nomeClasse.".php");
    }  
}
spl_autoload_register("incluirClasse");
spl_autoload_register(function($nomeClasse){
    if(file_exists("Abistratas".DIRECTORY_SEPARATOR.$nomeClasse.".php") === true){
        require_once("Abistratas".DIRECTORY_SEPARATOR.$nomeClasse.".php");
    } 
});

?>