<?php

session_id('f8qhl5shnop8hr8r8sbhcn5j6g');

require_once ("incs/config/config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>
