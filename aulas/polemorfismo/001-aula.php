<?php

use JetBrains\PhpStorm\NoReturn;

abstract class Animal{
    public function fala(){
        return "Som";

    }
    public function mover(){
        return "Andar";
    }
}

class Cachoro extends Animal{
    public function fala(){
        return "Late";
    }

}
class Gato extends Animal{
    public function fala(){
        return "Mia";
    }
}
class Passaro extends Animal{
    public function fala(){
        return "Canta";
    }
    public function mover(){
        return "Voa ". parent::mover();
    }
}

echo "--------------------------<br>";
$pluto = new Cachoro();

echo $pluto->fala() . "<br>";
echo $pluto->mover() . "<br>";
echo "--------------------------<br>";
$Lee = new Gato();

echo $Lee->fala() . "<br>";
echo $Lee->mover() . "<br>";
echo "--------------------------<br>";
$piopio = new Passaro();

echo $piopio->fala() . "<br>";
echo $piopio->mover() . "<br>";
echo "--------------------------<br>";

?>