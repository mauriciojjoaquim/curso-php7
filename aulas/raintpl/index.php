<?php

require_once("vendor/autoload.php");


use Rain\Tpl;

//config
$config = array(
    "tpl_dir"   =>  "tpl/",
    "cache_dir" => "cache/"
);

Tpl::configure($config);
$tpl = new Tpl;


$tpl->assign("name","CSE-Eletric");
$tpl->assign("version",PHP_VERSION );

$tpl->draw("index");




?>