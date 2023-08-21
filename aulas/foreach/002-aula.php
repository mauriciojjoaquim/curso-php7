<form>
<input type="text" name="nome">
<input type="date" name="nacimento">
<input type="submit" value="OK">
</form>
<?php

//foreach
if(isset($_GET)){
foreach ($_GET as $key => $value) {
   

   echo $key.": " . $value ."<br>";

   
   }
   echo "<hr>";
}
?>

