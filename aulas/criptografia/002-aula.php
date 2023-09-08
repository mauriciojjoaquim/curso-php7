<?php 

define('SECRET_IV', pack('a16', 'senha'));
define('SECRET', pack('a16', 'senha'));

$data = [
    "nome"=>"CSE-Eletric"
];

$openssl = openssl_encrypt (
    json_encode($data),
    'AES-128-CBC',
    SECRET,
    0,
    SECRET_IV
);

echo $openssl;

echo"<br>";
$string = openssl_decrypt($openssl, 'AES-128-CBC',SECRET, 0, SECRET_IV);

echo $string;
var_dump(json_decode($string, true));
echo"<br>";
?>