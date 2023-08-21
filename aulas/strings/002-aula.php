<?php

//Strings 

$nome = "mauricio jose joaquim";

//coloca-se tudo em maiusculo
echo "Comverte tudo para maiusculo<br><br>";

echo "<br>";
echo strtoupper($nome);
echo "<br><hr>";

//coloca tudo em minusculo
echo "Comverte tudo para minusculo<br><br>";
$nome = strtoupper($nome);


//De maiuculo para minuculo
$nome = "MAURICIO JOSE JOAQUIM";
echo strtolower($nome);
echo "<br><hr>";

//Primeira letra em mausculo
echo "Comverte todas primeira letra para maiusculo<br><br>";
$nome = "mauricio jose joaquim";
echo "<br>";
echo ucwords($nome);
echo "<br><hr>";

//Primeira letra em mausculo
echo "Comverte só a primeira letra para maiusculo<br><br>";
$nome = "mauricio jose joaquim";
echo "<br>";
echo ucfirst($nome);
echo "<br><hr>";
?>
