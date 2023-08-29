<?php 

$conn = new PDO("mysql:dbname=db_php7;host=localhost","root","");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios  WHERE idusuario= ?");

$id = 9;






$stmt->execute(array($id));

$conn->commit();
//$conn->rollBack();

echo "Deletado com sucesso";


?>