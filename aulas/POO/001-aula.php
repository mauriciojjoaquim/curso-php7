<?php

class Pessoa{

    public $nome;//Atributo


    public function falar(){//método
        return "Meu nome é ".$this->nome;
    }
}

$mauricio = new Pessoa();

$mauricio->nome = "Mauricio José Joaquim";

echo $mauricio->falar();
?>