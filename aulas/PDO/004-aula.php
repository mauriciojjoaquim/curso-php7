<?php 

$conn = new PDO("mysql:dbname=db_php7;host=localhost","root","");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASS WHERE idusuario= :ID");

$id = 10;
$login = "macielfdsilva";
$pass = "123456";

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASS",$pass);
$stmt->bindParam(":ID",$id);


$stmt->execute();

echo "Auterado com sucesso";


?>