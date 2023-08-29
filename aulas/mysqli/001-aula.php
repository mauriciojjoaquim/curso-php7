<?php
$conn = new mysqli("localhost","root","","db_php7");

if($conn->connect_error){
    echo "Error: ".$conn->connect_error;
}

//$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?) ");

$stmt->bind_param("ss",$login, $pass);

$login = "cosmemmmatos";
 $pass = "123456";


$stmt->execute();

$login = "noemiaapsilva";
 $pass = "123456";


$stmt->execute();

?>