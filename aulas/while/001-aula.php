<?php
//while
$condicao = true;

while ($condicao) {
   $numero = rand(1, 10);

   if($numero === 3){
      echo "TRÊS!!! <br>";
      $condicao = false;
   }
   echo $numero . " ";
}

?>
