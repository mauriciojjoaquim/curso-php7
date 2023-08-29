<?php 

$conn = new PDO("mysql:dbname=db_php7;host=localhost","root","");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN,:PASS)");

$login = "luizmmfilho";
$pass = "123456";

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASS",$pass);


$stmt->execute();

echo "Incerido OK";


?>