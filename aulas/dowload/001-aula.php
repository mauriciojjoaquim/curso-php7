<?php

$link = "http://localhost/deveport/website/curso-php7/curso-php7/aulas/dowload/imagens/html5.png";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>
<img src="<?=$basename?>">