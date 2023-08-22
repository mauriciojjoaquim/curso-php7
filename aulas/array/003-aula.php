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

print_r($pessoas);
echo "<br>";
print_r($pessoas[0]['nome']);
?>
