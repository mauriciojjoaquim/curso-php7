<?php 

session_start();


//depois de verifica login e senha reinicia o id de sessão
session_destroy();

session_start();

session_regenerate_id();

echo session_id();



?>