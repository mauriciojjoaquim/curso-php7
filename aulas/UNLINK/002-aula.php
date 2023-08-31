<?php

if(!is_dir("incs")) mkdir("incs");


foreach (scandir("incs") as $item) {
    if(!in_array($item, array(".",".."))){

        unlink("incs/".$item);

    }
}

echo "OK";
//$file = fopen("teste.txt", "w+");

//fclose($file);

//unlink("teste.txt");

//echo "Arquivo removido com sucesso!";

?>