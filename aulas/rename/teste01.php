<?php 

$dirtemp = "temp";
$dirincs = "incs";
$dirimagens = "incs/imagens";
$dircss = "incs/css";
$dirjs = "incs/js";
$dirconfig = "incs/config";
$dirpartials = "incs/partials";
$dirpartialsg = "incs/partials/global";
$dirpartialsgp = "incs/partials/global/pages";
$dirpartialsp = "incs/partials/pages";

if(!is_dir($dirtemp)) mkdir($dirtemp);
if(!is_dir($dirincs)) mkdir($dirincs);
if(!is_dir($dircss)) mkdir($dircss);
if(!is_dir($dirimagens)) mkdir($dirimagens);
if(!is_dir($dirjs)) mkdir($dirjs);
if(!is_dir($dirconfig)) mkdir($dirconfig);
if(!is_dir($dirpartials)) mkdir($dirpartials);
if(!is_dir($dirpartialsg)) mkdir($dirpartialsg);
if(!is_dir($dirpartialsgp)) mkdir($dirpartialsgp);
if(!is_dir($dirpartialsp)) mkdir($dirpartialsp);



$filecss = "styles.css";

if(!file_exists($dircss. DIRECTORY_SEPARATOR .$filecss)){

    $file = fopen($dircss. DIRECTORY_SEPARATOR .$filecss, "w+");
    
    fclose($file);
}
$filejs = "script.js";

if(!file_exists($dirjs. DIRECTORY_SEPARATOR .$filecss)){

    $file = fopen($dirjs. DIRECTORY_SEPARATOR .$filejs, "w+");
    
    fclose($file);
}
?>