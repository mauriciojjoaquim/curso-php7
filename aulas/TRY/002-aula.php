<?php 



function trataNome($nome){

    if(!$nome){

        throw new Exception("Nenhum nome foi informado ", 700);
        

    }
    echo ucfirst($nome)."<br>";

}

try {

   tratanome("João");
   tratanome("");
    
}catch(Exception $e){
    echo $e->getMessage();

}finally {

    echo "executou bloco try. ";

}



?>