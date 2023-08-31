<?php
$name = "incs";

if(!is_dir($name)){
    mkdir($name);
    echo "Diretório ".$name." Criado com sucesso.";
}else{
    rmdir($name);
    echo "O nome ".$name." ja existe no Diretório e foi removido.";
}
?>