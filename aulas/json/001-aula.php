<?php

//array 

$pessoas = array();

array_push($pessoas, array(
    'nome'  => 'Mauricio',
    'idade' => '45'
));
array_push($pessoas, array(
    'nome'  => 'Aloizio',
    'idade' => '47'
));

echo json_encode($pessoas);
?>
