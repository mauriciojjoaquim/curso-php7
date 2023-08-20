<?php

//Strings 

$nome = "mauricio jose joaquim";

//coloca-se tudo em maiusculo
echo "Comverte tudo para maiusculo<br><br>";
echo $nome;
echo "<br>";
echo strtoupper($nome);
echo "<br><hr>";

//coloca tudo em minusculo
echo "Comverte tudo para minusculo<br><br>";
$nome = strtoupper($nome);

echo $nome;
echo "<br>";
echo strtolower($nome);
echo "<br><hr>";
?>
