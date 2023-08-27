<?php


class Pessoa{

    public $nome = "Rasmus Lerdorf";
    protected $idade = 48;
    private $senha = "123456";
    public function verDados(){
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        if(isset($this->senha)){
            echo $this->senha . "<br/>";
        }else{
            echo "Voce não tem acesso a dado de senha";
        }
    }

}
class Programador extends Pessoa{
    public function verDados(){
        echo get_class($this) . "<br/>";
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        if(isset($this->senha)){
            echo $this->senha . "<br/>";
        }else{
            echo "Voce não tem acesso a dado de senha";
        }
        
    }


}

$objeto = new Programador();

//echo "Nome: " . $objeto->nome . "<br/>";
//echo "Idade: " . $objeto->idade . "<br/>";
//echo "senha: " . $objeto->senha . "<br/>";
$objeto->verDados();

?>