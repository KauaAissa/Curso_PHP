<?php

class Cachorro {

    public $raca;
    public $cor;

    function __construct($raca, $cor) {
        $this->raca = $raca;
        $this->cor = $cor;
    }

    public function exibirAnimal() {
        echo "O animal da raca $this->raca tem a cor $this->cor <br>";
    }

}

$bulldog = new Cachorro("Bulldog", "Preta");

$bulldog->exibirAnimal();