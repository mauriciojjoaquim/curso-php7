<?php 
$serverdb = 'localhost\SQLEXPRESS;ConnectionPooling=0';
$userdb = "dbphp71";
$senhadb = "dbphp7123456";
$daddosdb = "db_php7";

$conn = new PDO("sqlsrv:Database=$daddosdb;Server=$serverdb", $userdb ,$senhadb);

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogim ASC");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($results as $row){
    foreach ($row as $key => $value) {
        echo "<strong>".$key .":</strong> ".$value. "<br/>";
    }
    echo "===============================================<br/>";
}

//var_dump($results);
?>