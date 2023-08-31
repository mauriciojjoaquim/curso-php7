<?php 

$filename = "html5.png";

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$minetype = $fileinfo->file($filename);

$base64encode = "data:".$minetype.";base64, " . $base64;


?>
<a href="http://<?=$base64encode?>" target="_blank" rel="noopener noreferrer">Ver imagens</a>
<img src="<?=$base64encode?>" alt="">