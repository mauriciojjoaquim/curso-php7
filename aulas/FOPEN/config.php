<?php 

spl_autoload_register(function($nameClasse){
    $dirclass = "class";
    $filenane = $dirclass.DIRECTORY_SEPARATOR.$nameClasse. ".php";
    if(file_exists($filenane)){

        require_once($filenane);

    }

});



?>