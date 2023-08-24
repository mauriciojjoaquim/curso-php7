<?php

require_once ("incs/config/config.php");

echo session_save_path();

var_dump(session_status());

echo "<br>";

switch (session_status()) {
    case PHP_SESSION_DISABLED:
        echo "A sessão estão desabilitadas!";
        break;
    case PHP_SESSION_NONE:
        echo "A sessão estão abilitadas mais não iniciadas!";
        break;
    case PHP_SESSION_ACTIVE:
        echo "A sessão estão abilitadas e uma sessão existe!";
        break;
}
?>
