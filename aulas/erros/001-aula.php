<?php 

function error_handler($code, $mensage, $file, $line){
    echo json_encode(array(
        "code"=>$code,
        "mensage"=>$mensage,
        "file"=>$file,
        "line"=>$line
    ));
}

set_error_handler("error_handler");

echo (100 / 2);


?>