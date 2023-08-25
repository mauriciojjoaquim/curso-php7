<?php
//Data 

$dt = new DateTime();

$periudo = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s");

$dt->add($periudo);

echo "<br>";

echo $dt->format("d/m/Y H:i:s");


?>