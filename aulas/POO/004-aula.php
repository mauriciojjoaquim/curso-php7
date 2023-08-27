<?php

class Endereco{

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($log,$num,$cid){
    $this->logradouro = $log;
    $this->numero = $num;
    $this->cidade = $cid;
    }

    public function __destruct(){

        //var_dump("Destruir");
        
    }

    public function __toString(){

        return $this->logradouro.", ".$this->numero." - ".$this->cidade;
        
    }
}

$meuEndereco = new Endereco("Rua Marli de oliveira Cobra", "66 C4","São Paulo");

echo $meuEndereco;
//var_dump($meuEndereco);
//unset($meuEndereco);
?>