<?php

//FOR

for ($i=0; $i < 10; $i++) { 
   echo $i ."<br>";
}
echo "<hr>";
for ($i=00; $i < 100; $i+=5) { 
   echo $i ."<br>";
}
echo "<hr>";
for ($i=00; $i < 1000; $i+=50) { 

    if($i > 200 && $i < 800) continue;
   echo $i ."<br>";
}
echo "<hr>";

for ($i=00; $i < 1000; $i+=50) { 

    if($i > 200 && $i < 800) continue;

    if($i === 900) break;
   echo $i ."<br>";
}
echo "<hr>";
?>
