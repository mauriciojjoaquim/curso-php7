<?php 

$conn = new PDO("mysql:dbname=db_php7;host=localhost","root","");

$stmt = $conn->prepare("DELETE FROM tb_usuarios  WHERE idusuario= :ID");

$id = 10;



$stmt->bindParam(":ID",$id);


$stmt->execute();

echo "Deletado com sucesso";


?>