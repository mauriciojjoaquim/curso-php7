<?php
//Data

//$ts = strtotime("20023-08-24");
//$ts = strtotime("now");
$ts = strtotime("+1 week");

echo date("l, d/m/Y H:i:s", $ts);

?>