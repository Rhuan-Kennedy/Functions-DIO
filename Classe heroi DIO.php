<?php

use PhpParser\Builder\Class_;

class classeHeroi{
    public $nome;
    public $idade;
    public $tipo;

   public function __construct($nome, $idade, $tipo) {
    $this->nome = $nome;
    $this->idade = $idade;
    $this->tipo = $tipo;
   }

   public function informacoesheroi(){
    echo "Nome: {$this->nome} idade: {$this->idade}, classe: {$this->tipo}";
   }

   public function atacar($tipo){
    if($this->tipo === "mago"){
        echo " O mago utilizou magia";
    } if($this->tipo === "guerreiro"){
        echo " O guerro causou dano fisico";

    } if($this->tipo === "monge"){
        echo " O monge utilizou suas artes marciais";
   }

}
}



$NomeHeroi= "Kryge";
$IdadeHeroi= 23;
$Classeheroi= "monge";

$MyHero = new classeHeroi ($NomeHeroi,$IdadeHeroi,$Classeheroi);

$MyHero->informacoesheroi();

$MyHero->atacar($Classeheroi);
?>
