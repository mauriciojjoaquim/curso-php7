<?php 

use Cliente\Cadastro;

require_once("config.php");
$cad = new Cadastro();
$cad->setNome("Djalma Sindesux");
$cad->setEmail("djalma@hotmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();

//echo $cad;

?>