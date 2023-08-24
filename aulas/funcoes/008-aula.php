<?php

//funções

function soma(int ...$valores):string {

   return array_sum($valores);
}

var_dump(soma(10,4));
echo "<br>";
echo soma(1.5,3.2);
echo "<br>";
?>
