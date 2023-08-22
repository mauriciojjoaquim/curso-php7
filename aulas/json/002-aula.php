<?php

$pessoas = '[{"nome":"Mauricio","idade":45},{"nome":"Aloizio","idade":47}]';


$dados = json_decode($pessoas, true);

var_dump($dados);
?>