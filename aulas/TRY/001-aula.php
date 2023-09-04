<?php 

try {

    throw new Exception("Houve um error ", 400);
    

}catch(Exception $e){
    echo json_encode(array(
        "mensagem"=>$e->getMessage(),
        "line"=>$e->getLine(),
        "file"=>$e->getFile(),
        "code"=>$e->getCode()
    ));

}



?>