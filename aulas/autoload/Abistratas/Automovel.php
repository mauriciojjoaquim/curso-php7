<?php 

abstract class Automovel implements Veiculo{

    public function acelerar($velocidade){
        echo "O veicolo acelerou até " . $velocidade."km/h<br/>";
    }
    public function frenar($velocidade){
        echo "O veicolo frenou até " . $velocidade."km/h<br/>";
    }
    public function trocarMarcha($marcha){
        echo "O veicolo engatou a macha " . $marcha."<br/>";
    }

}


?>