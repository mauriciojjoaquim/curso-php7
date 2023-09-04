<?php 

$dirtemp = "temp"; 
$dirincs = "incs";

if(!is_dir($dirtemp)) mkdir($dirtemp);
if(!is_dir($dirincs)) mkdir($dirincs);

$filename = "REDME.txt";

if(!file_exists($dirtemp. DIRECTORY_SEPARATOR .$filename)){

    $file = fopen($dirtemp. DIRECTORY_SEPARATOR .$filename, "w+");

    fwrite($file, date("Y-m-d H:i:s"));

    fclose($file);
}

rename(
    $dirincs. DIRECTORY_SEPARATOR .$filename, //origem
    $dirtemp. DIRECTORY_SEPARATOR .$filename //destino
);

echo "Arquivo transferido com sucesso!";
?>