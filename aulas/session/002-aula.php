<?php

require_once ("incs/config/config.php");

session_unset($_SESSION['nome']);


//session



echo $_SESSION['nome'];

session_destroy($_SESSION['nome']);

?>
