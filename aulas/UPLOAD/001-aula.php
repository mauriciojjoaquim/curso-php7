<form method="POST" enctype="multipart/form-data">

<input type="file" name="fileUpload">
<button type="submit">Send</button>

</form>

<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $file = $_FILES["fileUpload"];

    if($file["error"]){
        throw new Exception("Error: ".$file["error"]);
        
    }
    $diruploads = "uploads";

    if(!is_dir($diruploads)){

        mkdir($diruploads);
    }

   if(move_uploaded_file($file["tmp_name"], $diruploads . DIRECTORY_SEPARATOR . $file["name"])){
        echo "Upiload realizado com sucesso!";
   }else{
        throw new Exception("Não foi pocivel realizar o upload ");
   }

}



?>