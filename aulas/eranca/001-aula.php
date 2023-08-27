<?php

class Documento{

    private $numero;

    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($num){
        $this->numero = $num;
    }
}

class CPF extends Documento{

    public function valida():bool{

        $numero = $this->getNumero();

        //Aqui Validação do cpf
        return true;
    }

}

$doc = new CPF();

$doc->setNumero("17617230818");

var_dump($doc->valida());

echo "<br/>";

echo $doc->getNumero();

?>