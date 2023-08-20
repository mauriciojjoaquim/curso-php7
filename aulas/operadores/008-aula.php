<?php

//Operadores precedencia de operadores

$result = 10 + 3 / 2;
$result0 = (10 + 3) / 2 >5 && 10 + 5 < 20;
$result2 = (10 + 3) / 2 >5 || 10 + 5 < 10;
$result1 = (10 + 3) / 2;

echo $result;
echo "<br>";
echo $result1;
echo "<br>";
var_dump($result0);
echo "<br>";
var_dump($result2);
echo "<br>";

?>
