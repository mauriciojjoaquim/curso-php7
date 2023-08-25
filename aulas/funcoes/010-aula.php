<?php

//funções anõnimas

function teste($calback){


   $calback();


}

teste(function(){

      echo "Terminou!";
   });

?>
