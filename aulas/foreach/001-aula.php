<?php
//foreach

$meses = array(
   "Janeiro","Fevereiro","Março",
   "Abril","Maio","Junho",
   "Julho","Agosto","Sretembro",
   "Outubro","Novembro","Dezembro"
);

foreach ($meses as $mes) {
   echo "Omes é ". $mes."<br>";
}
echo "<hr>";
foreach ($meses as $index => $mes) {
   echo "Indice: ". $index."<br>";
   echo "Omes é ". $mes."<br>";
}

?>
