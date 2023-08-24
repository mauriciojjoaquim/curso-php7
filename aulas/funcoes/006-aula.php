<?php

//funções

$pessoas = array(
   'nome'=>'mauricio',
   'idade'=>45
);

foreach ($pessoas as &$value) {

   if (gettype($value) === 'integer') $value += 10;

   echo $value . "<br>";
   print_r($pessoas);
}
?>
